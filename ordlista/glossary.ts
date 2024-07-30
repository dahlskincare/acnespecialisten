namespace Glossary {
    export function onShowMoreClick(button: HTMLElement) {
        button.classList.add('is-hidden');
        button.parentElement.querySelector('.extended').classList.remove('zero-size');
    }

    const letterSelector = document.querySelector('#letter-selector-scroller');
    const letters = letterSelector.querySelectorAll('.letter');
    const categories = document.querySelectorAll('.item-category');

    letters[0].classList.add('active');

    letters.forEach((letter) => {
        (letter as HTMLElement).onclick = (_) => {
            letters.forEach((l) => {
                l.classList.remove('active');
            });
            letter.classList.add('active');
            document.querySelector(`#category-${letter.id}`).scrollIntoView();
        }
    });

    let currentIndex = 0;


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
            letters.forEach((l) => {
                l.classList.remove('active');
            });
            letters[closestCategoryIndex].classList.add('active');
            letters[closestCategoryIndex].parentElement.scrollLeft = (letters[closestCategoryIndex] as HTMLElement).offsetLeft;
            currentIndex = closestCategoryIndex;
        }
    }, { passive: true });
}