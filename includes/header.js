var Header;
(function (Header) {
    function toggleMenu(flag) {
        var overlay = document.querySelector('#mobile-nav-overlay');
        if (flag) {
            overlay.classList.add('active');
            document.body.classList.add('noscroll');
        }
        else {
            overlay.classList.remove('active');
            document.body.classList.remove('noscroll');
        }
    }
    Header.toggleMenu = toggleMenu;
    function toggleExpanded(e) {
        var panel = e.parentElement;
        if (panel.classList.contains('active')) {
            panel.classList.remove('active');
        }
        else {
            panel.classList.add('active');
        }
    }
    Header.toggleExpanded = toggleExpanded;
})(Header || (Header = {}));
//# sourceMappingURL=header.js.map