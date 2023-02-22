if (document.body.clientWidth > 800) {
    var _scrollStep_1 = 200;
    var _widget = document.querySelector('.nav-buttons-widget');
    var _carousel_1 = _widget.querySelector('#nav-buttons-carousel');
    var _buttonPrevContainer_1 = _widget.querySelector('#scroll-prev');
    var _buttonNextContainer_1 = _widget.querySelector('#scroll-next');
    var _buttonPrev = _buttonPrevContainer_1.querySelector('button');
    var _buttonNext = _buttonNextContainer_1.querySelector('button');
    if (_carousel_1.scrollWidth > _widget.parentElement.clientWidth) {
        _buttonPrev.addEventListener('click', function () {
            _carousel_1.scrollBy(-_scrollStep_1, 0);
        });
        _buttonNext.addEventListener('click', function () {
            _carousel_1.scrollBy(_scrollStep_1, 0);
        });
        _buttonNextContainer_1.classList.remove('is-hidden');
        _carousel_1.addEventListener('scroll', function () {
            var showNext = _carousel_1.scrollWidth - _carousel_1.scrollLeft != _carousel_1.clientWidth;
            var showPrevious = _carousel_1.scrollLeft > 0;
            if (showNext) {
                _buttonNextContainer_1.classList.remove('is-hidden');
            }
            else {
                _buttonNextContainer_1.classList.add('is-hidden');
            }
            if (showPrevious) {
                _buttonPrevContainer_1.classList.remove('is-hidden');
            }
            else {
                _buttonPrevContainer_1.classList.add('is-hidden');
            }
        });
    }
}
//# sourceMappingURL=nav_buttons.js.map