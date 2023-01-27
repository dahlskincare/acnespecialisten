function onReadMoreClick() {
    let collapsed = document.querySelector('#problems-banner-collapsed');
    collapsed.remove();
    document.querySelector('#problems-banner-expanded').classList.remove('is-hidden');
}

function showProblems(problems: String) {
    let problemIds = problems.split(',');
    let buttons = document.querySelector('#banner-problem-areas').children;
    for (var i = 0; i < buttons.length; i++) {
        let button = buttons[i] as HTMLElement;
        if (problems === 'ALL' || problemIds.indexOf(button.dataset.id) >= 0) {
            buttons[i].classList.remove('is-hidden');
        }
        else {
            buttons[i].classList.add('is-hidden');
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