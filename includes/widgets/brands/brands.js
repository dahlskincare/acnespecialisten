var Brands;
(function (Brands) {
    var widget = document.querySelector('.brands-widget');
    var container = widget.querySelector('.flex-container');
    var leftMask = widget.querySelector('#brand-mask-left');
    var rightMask = widget.querySelector('#brand-mask-right');
    if (container.scrollWidth > container.clientWidth + 20) {
        rightMask.classList.remove('is-hidden');
    }
    container.addEventListener('scroll', function () {
        // conditionally hide the left mask
        if (container.scrollLeft <= 0) {
            leftMask.classList.add('is-hidden');
        }
        else {
            leftMask.classList.remove('is-hidden');
        }
        // conditionally hide the right mask
        if (container.scrollLeft + container.offsetWidth >= container.scrollWidth - 30) {
            rightMask.classList.add('is-hidden');
        }
        else {
            rightMask.classList.remove('is-hidden');
        }
    });
    function scroll(dir) {
        container.scrollBy({ left: 450 * dir });
    }
    Brands.scroll = scroll;
})(Brands || (Brands = {}));
//# sourceMappingURL=brands.js.map