var HeaderTouch;
(function (HeaderTouch) {
    function toggleMenu() {
        var overlay = document.querySelector('#mobile-nav-overlay');
        if (overlay.classList.contains('active')) {
            overlay.classList.remove('active');
            document.body.classList.remove('noscroll');
        }
        else {
            overlay.classList.add('active');
            document.body.classList.add('noscroll');
        }
    }
    HeaderTouch.toggleMenu = toggleMenu;
    function toggleExpanded(e) {
        var panel = e.parentElement;
        if (panel.classList.contains('active')) {
            panel.classList.remove('active');
        }
        else {
            panel.classList.add('active');
        }
    }
    HeaderTouch.toggleExpanded = toggleExpanded;
})(HeaderTouch || (HeaderTouch = {}));
var HeaderDesktop;
(function (HeaderDesktop) {
    function toggleMenu() {
        var button = document.querySelector('#hamburger-button');
        button.classList.toggle('active');
        button.classList.toggle('not-active');
        var overlay = document.querySelector('#desktop-nav-overlay');
        if (overlay.classList.contains('active')) {
            overlay.classList.remove('active');
        }
        else {
            overlay.classList.add('active');
        }
    }
    HeaderDesktop.toggleMenu = toggleMenu;
    // Start top ("important notice") slideshow
    var slideIndex = 0;
    var notice = document.querySelector('#important-notice');
    var slides = notice.querySelectorAll('.important-notice-slide');
    if (slides.length > 0) {
        slides[0].classList.remove('offscreen');
        setInterval(function () {
            slides[slideIndex].classList.add('offscreen');
            slideIndex = (slideIndex + 1) % slides.length;
            slides[slideIndex].classList.remove('offscreen');
        }, 6000);
    }
})(HeaderDesktop || (HeaderDesktop = {}));
//# sourceMappingURL=header.js.map