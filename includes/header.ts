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
        const button = document.querySelector('#hamburger-button');
        button.classList.toggle('active');
        button.classList.toggle('not-active');
        const overlay = document.querySelector('#desktop-nav-overlay');
        if (overlay.classList.contains('active')) {
            overlay.classList.remove('active');
        } else {
            overlay.classList.add('active');
        }
    }

    // Start top ("important notice") slideshow
    let slideIndex = 0;
    const notice = document.querySelector('#important-notice');
    const slides = notice.querySelectorAll('.important-notice-slide');
    if (slides.length > 0) {
        slides[0].classList.remove('offscreen');
        setInterval(() => {
            slides[slideIndex].classList.add('offscreen');
            slideIndex = (slideIndex + 1) % slides.length;
            slides[slideIndex].classList.remove('offscreen');
        }, 6000);
    }
}