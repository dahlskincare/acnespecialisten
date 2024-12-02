function showExtendedContent(button) {
    button.classList.add('is-hidden');
    button.parentElement.querySelector("#extended-content").classList.remove('zero-size');
}
function hideExtendedContent(button) {
    const widget = button.parentElement.parentElement;
    const buttons = widget.querySelectorAll(".show-button");
    buttons.forEach((button) => {
        button.classList.remove('is-hidden');
    });
    widget.querySelector("#extended-content").classList.add('zero-size');
}
//# sourceMappingURL=problem-trivia-card.js.map