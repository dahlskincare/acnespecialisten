var BrandsPage;
(function (BrandsPage) {
    let scroller;
    document.addEventListener('DOMContentLoaded', () => {
        const container = document.querySelector('#brands-container');
        const brands = container.querySelector('#brands');
        scroller = brands.querySelector('#brands-shadow');
        const leftMask = container.querySelector('#scroll-button-previous');
        const rightMask = container.querySelector('#scroll-button-next');
        if (scroller.scrollWidth > scroller.clientWidth + 20) {
            rightMask.classList.remove('is-hidden');
        }
        leftMask.onclick = () => scroll(-1);
        rightMask.onclick = () => scroll(1);
        scroller.addEventListener('scroll', () => {
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
    });
    function scroll(dir) {
        if (scroller != undefined) {
            scroller.scrollBy({ left: 450 * dir });
        }
    }
    BrandsPage.scroll = scroll;
})(BrandsPage || (BrandsPage = {}));
//# sourceMappingURL=brands.js.map