namespace Glossary {
    const letterSelectorScroller = document.querySelector('#letter-selector-scroller');
    const letterSelector = letterSelectorScroller.children[0];
    const letters = letterSelector.querySelectorAll('.letter');

    letters[0].classList.add('active');

    letters.forEach((letter) => {
        (letter as HTMLElement).onclick = (e) => {
            console.log(letter.id);
        }

    });

}