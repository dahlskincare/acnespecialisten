var BrandsPage;
(function (BrandsPage) {
    var container = document.querySelector('#brands-container');
    var brands = container.querySelector('#brands');
    var scroller = brands.querySelector('#brands-shadow');
    var leftMask = container.querySelector('#scroll-button-previous');
    var rightMask = container.querySelector('#scroll-button-next');
    if (scroller.scrollWidth > scroller.clientWidth + 20) {
        rightMask.classList.remove('is-hidden');
    }
    leftMask.onclick = function () { return scroll(-1); };
    rightMask.onclick = function () { return scroll(1); };
    scroller.addEventListener('scroll', function () {
        // conditionally hide the left mask
        if (scroller.scrollLeft <= 0) {
            leftMask.classList.add('is-hidden');
        }
        else {
            leftMask.classList.remove('is-hidden');
        }
        // conditionally hide the right mask
        if (scroller.scrollLeft + scroller.offsetWidth >= scroller.scrollWidth - 30) {
            rightMask.classList.add('is-hidden');
        }
        else {
            rightMask.classList.remove('is-hidden');
        }
    });
    function scroll(dir) {
        scroller.scrollBy({ left: 450 * dir });
    }
    BrandsPage.scroll = scroll;
})(BrandsPage || (BrandsPage = {}));
//# sourceMappingURL=brands.js.map