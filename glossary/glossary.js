var Glossary;
(function (Glossary) {
    var letterSelectorScroller = document.querySelector('#letter-selector-scroller');
    var letterSelector = letterSelectorScroller.children[0];
    var letters = letterSelector.querySelectorAll('.letter');
    letters[0].classList.add('active');
    letters.forEach(function (letter) {
        letter.onclick = function (e) {
            console.log(letter.id);
        };
    });
})(Glossary || (Glossary = {}));
//# sourceMappingURL=glossary.js.map