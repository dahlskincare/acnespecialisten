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
//# sourceMappingURL=results.js.map