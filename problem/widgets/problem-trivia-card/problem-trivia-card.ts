function showExtendedContent(button: Element) {
    button.classList.add('is-hidden');
    button.parentElement.querySelector("#extended-content").classList.remove('zero-size');
}

function hideExtendedContent(button: Element) {
    const widget = button.parentElement.parentElement;
    const buttons = widget.querySelectorAll(".show-button");
    buttons.forEach((button: Element) => {
        button.classList.remove('is-hidden');
    });
    widget.querySelector("#extended-content").classList.add('zero-size');
}