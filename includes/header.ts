namespace HeaderTouch {
    export function toggleMenu() {
        const overlay = document.querySelector('#mobile-nav-overlay');

        if (overlay.classList.contains('active')) {
            overlay.classList.remove('active');
            document.body.classList.remove('noscroll');
        } else {
            overlay.classList.add('active');
            document.body.classList.add('noscroll');
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

namespace HeaderDesktop {
    export function toggleMenu() {
        const overlay = document.querySelector('#desktop-nav-overlay');
        if (overlay.classList.contains('active')) {
            overlay.classList.remove('active');
            document.body.classList.remove('noscroll');
        } else {
            overlay.classList.add('active');
            document.body.classList.add('noscroll');
        }
    }
}