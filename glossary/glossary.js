var Glossary;
(function (Glossary) {
    function onShowMoreClick(button) {
        button.classList.add('is-hidden');
        button.parentElement.querySelector('.extended').classList.remove('is-hidden');
    }
    Glossary.onShowMoreClick = onShowMoreClick;
    var letterSelectorScroller = document.querySelector('#letter-selector-scroller');
    var letterSelector = letterSelectorScroller.children[0];
    var letters = letterSelector.querySelectorAll('.letter');
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
})(Glossary || (Glossary = {}));
//# sourceMappingURL=glossary.js.map