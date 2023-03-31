var Article;
(function (Article) {
    var content = document.querySelector('#content');
    var headers = content.querySelectorAll('h2');
    var navButtons = document.querySelector('#nav-buttons-scroller').querySelector('.flex-row');
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
    function onResultOverlayDown(e) {
        var anchor = e.target;
        dragged = new Anchor(anchor, anchor.parentElement, anchor.parentElement.parentElement.children[1], anchor.parentElement.parentElement.getBoundingClientRect());
        console.log(dragged.bounds.width);
    }
    function onResultOverlayMove(e) {
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
    function onResultOverlayUp(_e) {
        dragged = null;
    }
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
        navButtons.appendChild(button);
    });
    if (document.body.clientWidth > 800) {
        var scroller_1 = navButtons.parentElement;
        var prev_1 = scroller_1.parentElement.querySelector('#scroll-prev');
        var next_1 = scroller_1.parentElement.querySelector('#scroll-next');
        scroller_1.addEventListener('scroll', function () {
            var showNext = scroller_1.scrollWidth - scroller_1.scrollLeft > scroller_1.clientWidth;
            var showPrevious = scroller_1.scrollLeft > 0;
            if (showNext) {
                next_1.classList.remove('is-hidden');
            }
            else {
                next_1.classList.add('is-hidden');
            }
            if (showPrevious) {
                prev_1.classList.remove('is-hidden');
            }
            else {
                prev_1.classList.add('is-hidden');
            }
        });
        prev_1.addEventListener('click', function () {
            scroller_1.scrollBy(-133, 0);
        });
        next_1.addEventListener('click', function () {
            scroller_1.scrollBy(133, 0);
        });
        if (scroller_1.scrollWidth > scroller_1.clientWidth) {
            next_1.classList.remove('is-hidden');
        }
    }
    document.querySelectorAll('.result-overlay').forEach(function (resultOverlay) {
        var button = resultOverlay.querySelector('.ro-slider-button');
        if (button != undefined) {
            button.addEventListener('mousedown', onResultOverlayDown, { passive: true });
            button.addEventListener('touchstart', onResultOverlayDown, { passive: true });
        }
        resultOverlay.addEventListener('mousemove', onResultOverlayMove, { passive: false });
        resultOverlay.addEventListener('touchmove', onResultOverlayMove, { passive: false });
    });
    document.addEventListener('mouseup', onResultOverlayUp, { passive: true });
    document.addEventListener('touchend', onResultOverlayUp, { passive: true });
    document.querySelectorAll('.faq-category').forEach(function (category) {
        if (category.children.length == 2) {
            var title = category.children[0];
            var content_1 = category.children[1];
            title.onclick = function (_e) {
                if (content_1.classList.contains('is-hidden')) {
                    content_1.classList.remove('is-hidden');
                }
                else {
                    content_1.classList.add('is-hidden');
                }
            };
        }
    });
})(Article || (Article = {}));
//# sourceMappingURL=article.js.map