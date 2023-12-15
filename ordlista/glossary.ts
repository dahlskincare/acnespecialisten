namespace Glossary {
    export function onShowMoreClick(button: HTMLElement) {
        button.classList.add('is-hidden');
        button.parentElement.querySelector('.extended').classList.remove('zero-size');
    }


    const letterSelectorScroller = document.querySelector('#letter-selector-scroller');
    const letterSelector = letterSelectorScroller.children[0];
    const letters = letterSelector.querySelectorAll('.letter');

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
}