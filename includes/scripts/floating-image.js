var FloatingImage;
(function (FloatingImage) {
    if (document.body.clientWidth >= 1024) {
        window.addEventListener('scroll', onScroll, { passive: true });
        var _floater_1 = document.querySelector("#floater");
        var _picture_1 = _floater_1.querySelector('#floating-picture');
        var _footerLarge_1 = document.querySelector('#footer-large');
        var _brands_1 = document.querySelector('#brands');
        function onScroll(event) {
            var brandsMargin = 88;
            var footerMargin = 104;
            var headerOffset = -86;
            var distanceToBottom = document.documentElement.scrollHeight + headerOffset - document.documentElement.scrollTop;
            var offset = _footerLarge_1.offsetHeight + footerMargin;
            if (_brands_1 != undefined) {
                offset += _brands_1.offsetHeight + brandsMargin;
            }
            if (distanceToBottom - offset < _picture_1.offsetHeight) {
                _floater_1.classList.add('attached-bottom');
                _floater_1.style.top = "".concat(document.body.offsetHeight - offset - _picture_1.offsetHeight, "px");
            }
            else {
                _floater_1.style.top = null;
                _floater_1.classList.remove('attached-bottom');
            }
            if (document.documentElement.scrollTop > 0) {
                _floater_1.classList.add('detached');
            }
            else {
                _floater_1.classList.remove('detached');
            }
        }
    }
})(FloatingImage || (FloatingImage = {}));
//# sourceMappingURL=floating-image.js.map