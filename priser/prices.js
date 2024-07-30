if (document.body.clientWidth > 800) {
    var categories_1 = document.querySelector('#brands-container');
    var categoryItems_1 = categories_1.querySelector('#brands');
    var buttonPrevious_1 = categories_1.querySelector('#scroll-button-previous');
    var buttonNext_1 = categories_1.querySelector('#scroll-button-next');
    categoryItems_1.addEventListener('scroll', function () {
        var showNext = categoryItems_1.scrollWidth - categoryItems_1.scrollLeft > categoryItems_1.clientWidth;
        var showPrevious = categoryItems_1.scrollLeft > 0;
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
        categoryItems_1.scrollBy(-133, 0);
    });
    buttonNext_1.addEventListener('click', function () {
        categoryItems_1.scrollBy(133, 0);
    });
    if (categoryItems_1.scrollWidth > categoryItems_1.clientWidth) {
        buttonNext_1.classList.remove('is-hidden');
    }
}
//# sourceMappingURL=prices.js.map