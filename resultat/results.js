if (document.body.clientWidth > 800) {
    let filters = document.querySelector('#filters-desktop');
    let filterItems = filters.querySelector('#filter-items');
    let buttonPrevious = filters.querySelector('#filter-button-previous');
    let buttonNext = filters.querySelector('#filter-button-next');
    filterItems.addEventListener('scroll', () => {
        let showNext = filterItems.scrollWidth - filterItems.scrollLeft > filterItems.clientWidth;
        let showPrevious = filterItems.scrollLeft > 0;
        if (showNext) {
            buttonNext.classList.remove('is-hidden');
        }
        else {
            buttonNext.classList.add('is-hidden');
        }
        if (showPrevious) {
            buttonPrevious.classList.remove('is-hidden');
        }
        else {
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
//# sourceMappingURL=results.js.map