var NavButtons;
(function (NavButtons) {
    var _widget = document.querySelector('.nav-buttons-widget');
    var _carousel = _widget.querySelector('#nav-buttons-carousel');
    if (document.body.clientWidth >= 1024) {
        var _scrollStep_1 = 200;
        var _buttonPrevContainer_1 = _widget.querySelector('#scroll-prev');
        var _buttonNextContainer_1 = _widget.querySelector('#scroll-next');
        var _buttonPrev = _buttonPrevContainer_1.querySelector('button');
        var _buttonNext = _buttonNextContainer_1.querySelector('button');
        if (_carousel.scrollWidth > _widget.parentElement.clientWidth) {
            _buttonPrev.addEventListener('click', function () {
                _carousel.scrollBy(-_scrollStep_1, 0);
            });
            _buttonNext.addEventListener('click', function () {
                _carousel.scrollBy(_scrollStep_1, 0);
            });
            _buttonNextContainer_1.classList.remove('is-hidden');
            _carousel.addEventListener('scroll', function () {
                var showNext = _carousel.scrollWidth - _carousel.scrollLeft >= _carousel.clientWidth;
                var showPrevious = _carousel.scrollLeft > 0;
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
            }, { passive: true });
        }
    }
    else {
        // small screen
        var header = document.querySelector('header');
        header.style.position = 'relative';
    }
    function setActive(button) {
        var target = document.querySelector("#".concat(button.dataset['id']));
        var offset = document.body.clientWidth >= 1024 ? 150 : 72;
        window.scrollTo(0, target.getBoundingClientRect().top + window.scrollY - offset);
        var parent = button.parentElement;
        for (var i = 0; i < parent.children.length; i++) {
            parent.children[i].classList.remove('active');
        }
        button.classList.add('active');
    }
    NavButtons.setActive = setActive;
})(NavButtons || (NavButtons = {}));
//# sourceMappingURL=nav_buttons.js.map