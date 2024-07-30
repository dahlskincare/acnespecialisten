var selectors = document.querySelectorAll('.treatment-area-selector-item');
var categories = document.querySelectorAll('.treatment-area');
var currentIndex = 0;
selectors[0].classList.add('active');
function scrollToCategory(target) {
    document.querySelector("#treatment-area-".concat(target.dataset.index)).scrollIntoView();
    selectors.forEach(function (s) {
        s.classList.remove('active');
    });
    target.classList.add('active');
}
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
        selectors.forEach(function (s) {
            s.classList.remove('active');
        });
        selectors[closestCategoryIndex].classList.add('active');
        selectors[closestCategoryIndex].parentElement.scrollLeft = selectors[closestCategoryIndex].offsetLeft;
        currentIndex = closestCategoryIndex;
    }
}, { passive: true });
//# sourceMappingURL=permanent-harborttagning.js.map