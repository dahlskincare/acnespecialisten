window.addEventListener('scroll', onScroll, { passive: true });
var picture = document.querySelector('#picture');
function onScroll(event) {
    if (document.documentElement.scrollTop > 0) {
        picture.classList.add('faded');
    }
    else {
        picture.classList.remove('faded');
    }
}
//# sourceMappingURL=problems.js.map