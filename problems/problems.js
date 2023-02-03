function onReadMoreClick() {
    var collapsed = document.querySelector('#problems-banner-collapsed');
    collapsed.remove();
    document.querySelector('#problems-banner-expanded').classList.remove('is-hidden');
}
function showProblems(problems) {
    var problemIds = problems.split(',');
    var columns = document.querySelector('#banner-problem-areas').children;
    var cards = document.querySelectorAll('.problem-area-card');
    for (var i = 0; i < columns.length; i++) {
        var column = columns[i];
        var card = cards[i].parentElement;
        var index = problemIds.indexOf(column.dataset.id);
        if (problems === 'ALL' || index >= 0) {
            column.classList.remove('is-hidden');
            column.classList.remove('first');
            column.classList.remove('last');
            if (index == 0) {
                column.classList.add('first');
            }
            if (index == problemIds.length - 1) {
                column.classList.add('last');
            }
            card.classList.remove('is-hidden');
        }
        else {
            column.classList.add('is-hidden');
            column.classList.remove('first');
            column.classList.remove('last');
            card.classList.add('is-hidden');
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