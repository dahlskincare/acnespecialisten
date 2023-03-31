var Article;
(function (Article) {
    var content = document.querySelector('#content');
    var headers = content.querySelectorAll('h2');
    var navButtonsContainer = document.querySelector('#nav-buttons-scroller').querySelector('.flex-row');
    headers.forEach(function (headerEl) {
        var button = document.createElement("div");
        button.innerText = headerEl.innerText;
        button.className = 'nav-button';
        button.onclick = function () {
            if (window.innerWidth < 800) {
                headerEl.scrollIntoView();
            }
            else {
                headerEl.scrollIntoView();
            }
        };
        navButtonsContainer.appendChild(button);
    });
    var Anchor = /** @class */ (function () {
        function Anchor(button, slider, after, bounds) {
            this.button = null;
            this.slider = null;
            this.after = null;
            this.bounds = null;
            this.button = button;
            this.slider = slider;
            this.after = after;
            this.bounds = bounds;
        }
        return Anchor;
    }());
    var dragged = null;
    function onDown(e) {
        var anchor = e.target;
        dragged = new Anchor(anchor, anchor.parentElement, anchor.parentElement.parentElement.children[1], anchor.parentElement.parentElement.getBoundingClientRect());
        console.log(dragged.bounds.width);
    }
    function onMove(e) {
        if (dragged !== null) {
            e.preventDefault();
            var clientX = 0;
            if (e instanceof MouseEvent)
                clientX = e.clientX;
            else if (e instanceof TouchEvent)
                clientX = e.touches[0].clientX;
            var left = Math.min(dragged.bounds.width, Math.max(0, -(dragged.bounds.left - clientX)));
            dragged.slider.style.marginLeft = "".concat(left, "px");
            dragged.after.style.clipPath = "polygon(".concat(left, "px 0, 100% 0%, 100% 100%, ").concat(left, "px 100%)");
        }
    }
    function onUp(_e) {
        dragged = null;
    }
    document.querySelectorAll('.result-overlay').forEach(function (resultOverlay) {
        var button = resultOverlay.querySelector('.ro-slider-button');
        if (button != undefined) {
            button.addEventListener('mousedown', onDown, { passive: true });
            button.addEventListener('touchstart', onDown, { passive: true });
        }
        resultOverlay.addEventListener('mousemove', onMove, { passive: false });
        resultOverlay.addEventListener('touchmove', onMove, { passive: false });
    });
    document.addEventListener('mouseup', onUp, { passive: true });
    document.addEventListener('touchend', onUp, { passive: true });
})(Article || (Article = {}));
//# sourceMappingURL=article.js.map