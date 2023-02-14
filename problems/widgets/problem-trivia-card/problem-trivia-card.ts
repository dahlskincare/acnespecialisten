function showExtendedContent(button: Element) {
    button.classList.add('is-hidden');
    button.parentElement.querySelector("#extended-content").classList.remove('is-hidden');
}