namespace Header {
    export function toggleMenu(flag: boolean) {
        const overlay = document.querySelector('#mobile-nav-overlay');
        const nav = overlay.children[0];
        if (flag) {
            overlay.classList.add('active');
            document.body.classList.add('noscroll');
        } else {
            overlay.classList.remove('active');
            document.body.classList.remove('noscroll');
        }
    }

    export function toggleExpanded(e: HTMLElement) {
        const panel = e.parentElement;
        if (panel.classList.contains('active')) {
            panel.classList.remove('active');
        } else {
            panel.classList.add('active');
        }
    }
}