if (document.body.clientWidth >= 1024) {
    let _scrollStep = 200;
    let _widget = document.querySelector('.nav-buttons-widget');
    let _carousel = _widget.querySelector('#nav-buttons-carousel');
    let _buttonPrevContainer = _widget.querySelector('#scroll-prev');
    let _buttonNextContainer = _widget.querySelector('#scroll-next');
    let _buttonPrev = _buttonPrevContainer.querySelector('button');
    let _buttonNext = _buttonNextContainer.querySelector('button');
    if (_carousel.scrollWidth > _widget.parentElement.clientWidth) {
        _buttonPrev.addEventListener('click', () => {
            _carousel.scrollBy(-_scrollStep, 0);
        });
        _buttonNext.addEventListener('click', () => {
            _carousel.scrollBy(_scrollStep, 0);
        });
        _buttonNextContainer.classList.remove('is-hidden');

        _carousel.addEventListener('scroll', () => {
            let showNext = _carousel.scrollWidth - _carousel.scrollLeft != _carousel.clientWidth;
            let showPrevious = _carousel.scrollLeft > 0;

            if (showNext) {
                _buttonNextContainer.classList.remove('is-hidden');
            } else {
                _buttonNextContainer.classList.add('is-hidden');
            }

            if (showPrevious) {
                _buttonPrevContainer.classList.remove('is-hidden');
            } else {
                _buttonPrevContainer.classList.add('is-hidden');
            }
        });
    }
} else {
    // small screen
    let header = document.querySelector('header') as HTMLElement;
    header.style.position = 'relative';
}


window.addEventListener('scroll', _onScroll, { passive: true });


function _onScroll(event: Event) {
    console.log(event);
}