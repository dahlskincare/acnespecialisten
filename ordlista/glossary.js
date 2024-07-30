var Glossary;
(function (Glossary) {
    function onShowMoreClick(button) {
        button.classList.add('is-hidden');
        button.parentElement.querySelector('.extended').classList.remove('zero-size');
    }
    Glossary.onShowMoreClick = onShowMoreClick;
    var letterSelector = document.querySelector('#letter-selector-scroller');
    var letters = letterSelector.querySelectorAll('.letter');
    var categories = document.querySelectorAll('.item-category');
    letters[0].classList.add('active');
    letters.forEach(function (letter) {
        letter.onclick = function (_) {
            letters.forEach(function (l) {
                l.classList.remove('active');
            });
            letter.classList.add('active');
            document.querySelector("#category-".concat(letter.id)).scrollIntoView();
        };
    });
    var currentIndex = 0;
    // add a scroll listener to the document to update the active letter in the letter selector
    document.addEventListener('scroll', function () {
        // find the category index where the top of the category is closest to the top of the window
        var closestCategoryIndex = 0;
        var closestCategoryTop = categories[0].getBoundingClientRect().top;
        categories.forEach(function (category, index) {
            var categoryTop = category.getBoundingClientRect().top;
            if (Math.abs(categoryTop) < Math.abs(closestCategoryTop) + 100) {
                closestCategoryTop = categoryTop;
                closestCategoryIndex = index;
            }
        });
        if (closestCategoryIndex !== currentIndex) {
            letters.forEach(function (l) {
                l.classList.remove('active');
            });
            letters[closestCategoryIndex].classList.add('active');
            letters[closestCategoryIndex].parentElement.scrollLeft = letters[closestCategoryIndex].offsetLeft;
            currentIndex = closestCategoryIndex;
        }
    }, { passive: true });
})(Glossary || (Glossary = {}));
//# sourceMappingURL=glossary.js.map