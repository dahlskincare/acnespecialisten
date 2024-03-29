if (document.body.clientWidth > 800) {
    let categories = document.querySelector('#brands-container');
    let categoryItems = categories.querySelector('#brands');
    let buttonPrevious = categories.querySelector('#scroll-button-previous');
    let buttonNext = categories.querySelector('#scroll-button-next');

    categoryItems.addEventListener('scroll', () => {
        let showNext = categoryItems.scrollWidth - categoryItems.scrollLeft > categoryItems.clientWidth;
        let showPrevious = categoryItems.scrollLeft > 0;

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
        categoryItems.scrollBy(-133, 0);
    });

    buttonNext.addEventListener('click', () => {
        categoryItems.scrollBy(133, 0);
    });


    if (categoryItems.scrollWidth > categoryItems.clientWidth) {
        buttonNext.classList.remove('is-hidden');
    }
}