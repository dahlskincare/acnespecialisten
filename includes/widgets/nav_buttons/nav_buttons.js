var _scrollStep = 200;
var _widget = document.querySelector('.nav-buttons-widget');
var _carousel = _widget.querySelector('#nav-buttons-carousel');
var _buttonPrevContainer = _widget.querySelector('#scroll-prev');
var _buttonNextContainer = _widget.querySelector('#scroll-next');
var _buttonPrev = _buttonPrevContainer.querySelector('button');
var _buttonNext = _buttonNextContainer.querySelector('button');
if (_carousel.scrollWidth > _widget.parentElement.clientWidth) {
    _buttonPrev.addEventListener('click', function () {
        _carousel.scrollBy(-_scrollStep, 0);
    });
    _buttonNext.addEventListener('click', function () {
        _carousel.scrollBy(_scrollStep, 0);
    });
    _buttonNextContainer.classList.remove('is-hidden');
    _carousel.addEventListener('scroll', function () {
        var showNext = _carousel.scrollWidth - _carousel.scrollLeft != _carousel.clientWidth;
        var showPrevious = _carousel.scrollLeft > 0;
        if (showNext) {
            _buttonNextContainer.classList.remove('is-hidden');
        }
        else {
            _buttonNextContainer.classList.add('is-hidden');
        }
        if (showPrevious) {
            _buttonPrevContainer.classList.remove('is-hidden');
        }
        else {
            _buttonPrevContainer.classList.add('is-hidden');
        }
    });
}
//# sourceMappingURL=nav_buttons.js.map