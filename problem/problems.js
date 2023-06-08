var Problems;
(function (Problems) {
    function onReadMoreClick() {
        var collapsed = document.querySelector('#problems-banner-collapsed');
        collapsed.remove();
        document.querySelector('#problems-banner-expanded').classList.remove('is-hidden');
    }
    Problems.onReadMoreClick = onReadMoreClick;
})(Problems || (Problems = {}));
function showProblems(problems) {
    var problemIds = problems.split(',');
    var columns = document.querySelector('#banner-problem-areas').children;
    var cards = document.querySelectorAll('.problem-area-card');
    for (var i = 0; i < columns.length; i++) {
        var column = columns[i];
        var card = cards[i].parentElement;
        var index = problemIds.indexOf(column.dataset.id);
        if (index >= 0) {
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
if (document.body.clientWidth > 800) {
    var filters = document.querySelector('#filters-desktop');
    var filterItems_1 = filters.querySelector('#filter-items');
    var buttonPrevious_1 = filters.querySelector('#filter-button-previous');
    var buttonNext_1 = filters.querySelector('#filter-button-next');
    filterItems_1.addEventListener('scroll', function () {
        var showNext = filterItems_1.scrollWidth - filterItems_1.scrollLeft > filterItems_1.clientWidth;
        var showPrevious = filterItems_1.scrollLeft > 0;
        if (showNext) {
            buttonNext_1.classList.remove('is-hidden');
        }
        else {
            buttonNext_1.classList.add('is-hidden');
        }
        if (showPrevious) {
            buttonPrevious_1.classList.remove('is-hidden');
        }
        else {
            buttonPrevious_1.classList.add('is-hidden');
        }
    });
    buttonPrevious_1.addEventListener('click', function () {
        filterItems_1.scrollBy(-133, 0);
    });
    buttonNext_1.addEventListener('click', function () {
        filterItems_1.scrollBy(133, 0);
    });
    if (filterItems_1.scrollWidth > filterItems_1.clientWidth) {
        buttonNext_1.classList.remove('is-hidden');
    }
}
//showProblems('ALL');
//# sourceMappingURL=problems.js.map