"use strict";
Object.defineProperty(exports, "__esModule", { value: true });
exports.onScroll = void 0;
window.addEventListener('scroll', onScroll, { passive: true });
var _floater = document.querySelector("#floater");
var _picture = _floater.querySelector('#floating-picture');
var _footerLarge = document.querySelector('#footer-large');
var _brands = document.querySelector('#brands');
function onScroll(event) {
    var brandsMargin = 88;
    var footerMargin = 104;
    var headerOffset = -86;
    var distanceToBottom = document.documentElement.scrollHeight + headerOffset - document.documentElement.scrollTop;
    var offset = _footerLarge.offsetHeight + footerMargin + _brands.offsetHeight + brandsMargin;
    if (distanceToBottom - offset < _picture.offsetHeight) {
        _floater.classList.add('attached-bottom');
        _floater.style.top = "".concat(document.body.offsetHeight - offset - _picture.offsetHeight, "px");
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
exports.onScroll = onScroll;
//# sourceMappingURL=floating-image.js.map