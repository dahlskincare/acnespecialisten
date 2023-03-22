namespace Category {
    export function onReadMoreClick(button: Element) {
        button.remove();
        document.querySelector('#problems-banner-expanded').classList.remove('is-hidden');
    }
}

if (document.body.clientWidth > 800) {
    let subcategories = document.querySelector('#subcategory-links-desktop');
    let subcategoryItems = subcategories.querySelector('#scroll-content');
    let buttonPrevious = subcategories.querySelector('#scroll-left');
    let buttonNext = subcategories.querySelector('#scroll-right');


    subcategoryItems.addEventListener('scroll', () => {
        let showNext = subcategoryItems.scrollWidth - subcategoryItems.scrollLeft > subcategoryItems.clientWidth;
        let showPrevious = subcategoryItems.scrollLeft > 0;

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
        subcategoryItems.scrollBy(-200, 0);
    });

    buttonNext.addEventListener('click', () => {
        subcategoryItems.scrollBy(200, 0);
    });


    if (subcategoryItems.scrollWidth > subcategoryItems.clientWidth) {
        buttonNext.classList.remove('is-hidden');
    }
}