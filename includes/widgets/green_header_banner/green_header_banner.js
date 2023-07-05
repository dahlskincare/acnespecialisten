var GreenHeaderBanner;
(function (GreenHeaderBanner) {
    function onReadMoreClick(source) {
        source.parentElement.querySelector('#banner-expanded').classList.remove('zero-size');
        source.remove();
    }
    GreenHeaderBanner.onReadMoreClick = onReadMoreClick;
})(GreenHeaderBanner || (GreenHeaderBanner = {}));
//# sourceMappingURL=green_header_banner.js.map