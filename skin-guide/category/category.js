var Category;
(function (Category) {
    function onReadMoreClick(button) {
        button.remove();
        document.querySelector('#problems-banner-expanded').classList.remove('is-hidden');
    }
    Category.onReadMoreClick = onReadMoreClick;
})(Category || (Category = {}));
if (document.body.clientWidth > 800) {
    var subcategories = document.querySelector('#subcategory-links-desktop');
    var subcategoryItems_1 = subcategories.querySelector('#scroll-content');
    var buttonPrevious_1 = subcategories.querySelector('#scroll-left');
    var buttonNext_1 = subcategories.querySelector('#scroll-right');
    subcategoryItems_1.addEventListener('scroll', function () {
        var showNext = subcategoryItems_1.scrollWidth - subcategoryItems_1.scrollLeft > subcategoryItems_1.clientWidth;
        var showPrevious = subcategoryItems_1.scrollLeft > 0;
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
        subcategoryItems_1.scrollBy(-200, 0);
    });
    buttonNext_1.addEventListener('click', function () {
        subcategoryItems_1.scrollBy(200, 0);
    });
    if (subcategoryItems_1.scrollWidth > subcategoryItems_1.clientWidth) {
        buttonNext_1.classList.remove('is-hidden');
    }
}
//# sourceMappingURL=category.js.map