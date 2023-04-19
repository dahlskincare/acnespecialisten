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
        var overlay = document.querySelector('#desktop-nav-overlay');
        if (overlay.classList.contains('active')) {
            overlay.classList.remove('active');
            document.body.classList.remove('noscroll');
        }
        else {
            overlay.classList.add('active');
            document.body.classList.add('noscroll');
        }
    }
    HeaderDesktop.toggleMenu = toggleMenu;
})(HeaderDesktop || (HeaderDesktop = {}));
//# sourceMappingURL=header.js.map