var FloatingImage;
(function (FloatingImage) {
    if (document.body.clientWidth >= 1024) {
        window.addEventListener('scroll', onScroll, { passive: true });
        let _floater = document.querySelector("#floater");
        let _picture = _floater.querySelector('#floating-picture');
        let _footerLarge = document.querySelector('#footer-large');
        let _brands = document.querySelector('#brands');
        function onScroll(event) {
            const brandsMargin = 88;
            const footerMargin = 104;
            const headerOffset = -86;
            let distanceToBottom = document.documentElement.scrollHeight + headerOffset - document.documentElement.scrollTop;
            let offset = _footerLarge.offsetHeight + footerMargin;
            if (_brands != undefined) {
                offset += _brands.offsetHeight + brandsMargin;
            }
            if (distanceToBottom - offset < _picture.offsetHeight) {
                _floater.classList.add('attached-bottom');
                _floater.style.top = `${document.body.offsetHeight - offset - _picture.offsetHeight}px`;
            }
            else {
                _floater.style.top = null;
                _floater.classList.remove('attached-bottom');
            }
            if (document.documentElement.scrollTop > 0) {
                _floater.classList.add('detached');
            }
            else {
                _floater.classList.remove('detached');
            }
        }
    }
})(FloatingImage || (FloatingImage = {}));
//# sourceMappingURL=floating-image.js.map