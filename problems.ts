function onReadMoreClick() {
    let collapsed = document.querySelector('#problems-banner-collapsed');
    collapsed.remove();
    document.querySelector('#problems-banner-expanded').classList.remove('is-hidden');
}

function showProblems(problems: String) {
    let problemIds = problems.split(',');
    let columns = document.querySelector('#banner-problem-areas').children;
    for (var i = 0; i < columns.length; i++) {
        let column = columns[i] as HTMLElement;
        let index = problemIds.indexOf(column.dataset.id);
        if (problems === 'ALL' || index >= 0) {
            columns[i].classList.remove('is-hidden');
            columns[i].classList.remove('first');
            columns[i].classList.remove('last');
            if (index == 0) {
                columns[i].classList.add('first');
            }
            if (index == problemIds.length - 1) {
                columns[i].classList.add('last');
            }
        }
        else {
            columns[i].classList.add('is-hidden');
            columns[i].classList.remove('first');
            columns[i].classList.remove('last');
        }
    }
}

function highlight(element: HTMLElement) {
    let parent = element.parentElement;
    for (var i = 0; i < parent.children.length; i++) {
        parent.children[i].classList.remove('highlight');
    }
    element.classList.add('highlight');
}