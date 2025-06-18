const selectors = document.querySelectorAll('.treatment-area-selector-item');
const categories = document.querySelectorAll('.treatment-area');
let currentIndex = 0;
selectors[0].classList.add('active');
function scrollToCategory(target) {
    document.querySelector(`#treatment-area-${target.dataset.index}`).scrollIntoView();
    selectors.forEach((s) => {
        s.classList.remove('active');
    });
    target.classList.add('active');
}
// add a scroll listener to the document to update the active letter in the letter selector
document.addEventListener('scroll', () => {
    // find the category index where the top of the category is closest to the top of the window
    let closestCategoryIndex = 0;
    let closestCategoryTop = categories[0].getBoundingClientRect().top;
    categories.forEach((category, index) => {
        const categoryTop = category.getBoundingClientRect().top;
        if (Math.abs(categoryTop) < Math.abs(closestCategoryTop) + 100) {
            closestCategoryTop = categoryTop;
            closestCategoryIndex = index;
        }
    });
    if (closestCategoryIndex !== currentIndex) {
        selectors.forEach((s) => {
            s.classList.remove('active');
        });
        selectors[closestCategoryIndex].classList.add('active');
        selectors[closestCategoryIndex].parentElement.scrollLeft = selectors[closestCategoryIndex].offsetLeft;
        currentIndex = closestCategoryIndex;
    }
}, { passive: true });
//# sourceMappingURL=permanent-harborttagning.js.map