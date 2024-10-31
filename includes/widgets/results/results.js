var ResultsWidget;
(function (ResultsWidget) {
    class ResultElement {
        constructor(button) {
            this.button = null;
            this.slider = null;
            this.after = null;
            this.bounds = null;
            this.button = button;
            this.slider = button.parentElement;
            this.after = this.slider.parentElement.children[1];
            this.bounds = this.slider.parentElement.getBoundingClientRect();
        }
    }
    var activeResult = null;
    function scroll(step) {
        const scroller = document.querySelector('.results-scroller');
        // 24 is the margin between results
        scroller.scrollBy(step * (scroller.getBoundingClientRect().width) + step * 24, 0);
    }
    ResultsWidget.scroll = scroll;
    function onSliderButtonDown(button) {
        activeResult = new ResultElement(button);
    }
    function onSliderButtonMove(e) {
        if (activeResult !== null) {
            e.preventDefault();
            let clientX = 0;
            if (e instanceof MouseEvent)
                clientX = e.clientX;
            else if (e instanceof TouchEvent)
                clientX = e.touches[0].clientX;
            let offset = Math.min(activeResult.bounds.width, Math.max(0, -(activeResult.bounds.left - clientX)));
            activeResult.slider.style.left = `${offset - (0.5 * activeResult.bounds.width)}px`;
            activeResult.after.style.clipPath = `polygon(${offset}px 0, 100% 0%, 100% 100%, ${offset}px 100%)`;
        }
    }
    function onSliderButtonUp(_e) {
        activeResult = null;
    }
    document.querySelectorAll('.result-overlay').forEach((resultOverlay) => {
        let button = resultOverlay.querySelector('.ro-slider-button');
        if (button != undefined) {
            button.addEventListener('mousedown', (e) => onSliderButtonDown(e.target), { passive: true });
            button.addEventListener('touchstart', (e) => onSliderButtonDown(e.target), { passive: true });
        }
        resultOverlay.addEventListener('mousemove', onSliderButtonMove, { passive: false });
        resultOverlay.addEventListener('touchmove', onSliderButtonMove, { passive: false });
    });
    document.addEventListener('mouseup', onSliderButtonUp, { passive: true });
    document.addEventListener('touchend', onSliderButtonUp, { passive: true });
})(ResultsWidget || (ResultsWidget = {}));
//# sourceMappingURL=results.js.map