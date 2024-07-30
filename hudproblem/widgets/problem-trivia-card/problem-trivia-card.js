function showExtendedContent(button) {
    button.classList.add('is-hidden');
    button.parentElement.querySelector("#extended-content").classList.remove('zero-size');
}
function hideExtendedContent(button) {
    var widget = button.parentElement.parentElement;
    var buttons = widget.querySelectorAll(".show-button");
    buttons.forEach(function (button) {
        button.classList.remove('is-hidden');
    });
    widget.querySelector("#extended-content").classList.add('zero-size');
}
//# sourceMappingURL=problem-trivia-card.js.map