var SkinGuide;
(function (SkinGuide) {
    function onReadMoreClick() {
        var collapsed = document.querySelector('#problems-banner-collapsed');
        collapsed.remove();
        document.querySelector('#problems-banner-expanded').classList.remove('is-hidden');
    }
    SkinGuide.onReadMoreClick = onReadMoreClick;
})(SkinGuide || (SkinGuide = {}));
//# sourceMappingURL=skin-guide.js.map