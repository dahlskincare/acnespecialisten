function onReadMoreClick() {
    var collapsed = document.querySelector('#problems-banner-collapsed');
    collapsed.remove();
    document.querySelector('#problems-banner-expanded').classList.remove('is-hidden');
}
function showProblems(problems) {
    var problemIds = problems.split(',');
    var buttons = document.querySelector('#banner-problem-areas').children;
    for (var i = 0; i < buttons.length; i++) {
        var button = buttons[i];
        if (problems === 'ALL' || problemIds.indexOf(button.dataset.id) >= 0) {
            buttons[i].classList.remove('is-hidden');
        }
        else {
            buttons[i].classList.add('is-hidden');
        }
    }
}
function highlight(element) {
    var parent = element.parentElement;
    for (var i = 0; i < parent.children.length; i++) {
        parent.children[i].classList.remove('highlight');
    }
    element.classList.add('highlight');
}
//# sourceMappingURL=problems.js.map