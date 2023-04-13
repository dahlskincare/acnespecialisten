var Reviews;
(function (Reviews) {
    function scroll(step) {
        var scroller = document.querySelector('.reviews-widget');
        scroller.children[0].scrollBy(step * (scroller.getBoundingClientRect().width) - step * 1, 0);
    }
    Reviews.scroll = scroll;
})(Reviews || (Reviews = {}));
//# sourceMappingURL=reviews.js.map