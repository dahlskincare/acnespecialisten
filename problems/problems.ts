namespace Problems {
    export function onReadMoreClick() {
        let collapsed = document.querySelector('#problems-banner-collapsed');
        collapsed.remove();
        document.querySelector('#problems-banner-expanded').classList.remove('is-hidden');
    }
}

function showProblems(problems: String) {
    let problemIds = problems.split(',');
    let columns = document.querySelector('#banner-problem-areas').children;
    let cards = document.querySelectorAll('.problem-area-card');
    for (var i = 0; i < columns.length; i++) {
        let column = columns[i] as HTMLElement;
        let card = cards[i].parentElement as HTMLElement;
        let index = problemIds.indexOf(column.dataset.id);
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

function highlight(element: HTMLElement) {
    let parent = element.parentElement;
    for (var i = 0; i < parent.children.length; i++) {
        parent.children[i].classList.remove('highlight');
    }
    element.classList.add('highlight');
}

if (document.body.clientWidth > 800) {
    let filters = document.querySelector('#filters-desktop');
    let filterItems = filters.querySelector('#filter-items');
    let buttonPrevious = filters.querySelector('#filter-button-previous');
    let buttonNext = filters.querySelector('#filter-button-next');


    filterItems.addEventListener('scroll', () => {
        let showNext = filterItems.scrollWidth - filterItems.scrollLeft >= filterItems.clientWidth;
        let showPrevious = filterItems.scrollLeft > 0;

        if (showNext) {
            buttonNext.classList.remove('is-hidden');
        } else {
            buttonNext.classList.add('is-hidden');
        }

        if (showPrevious) {
            buttonPrevious.classList.remove('is-hidden');
        } else {
            buttonPrevious.classList.add('is-hidden');
        }
    });

    buttonPrevious.addEventListener('click', () => {
        filterItems.scrollBy(-133, 0);
    });

    buttonNext.addEventListener('click', () => {
        filterItems.scrollBy(133, 0);
    });


    if (filterItems.scrollWidth > filterItems.clientWidth) {
        buttonNext.classList.remove('is-hidden');
    }
}

showProblems('ALL');