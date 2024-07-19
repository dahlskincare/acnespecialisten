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
        setInterval(slideNext, 8000);
    }

    export function slideNext() {
        for (let i = 0; i < slides.length; i++) {
            if (slides[i].classList.contains('offscreen-left')) {
                slides[i].classList.add('offscreen-right');
                slides[i].classList.remove('offscreen-left');
            }
        }
        slides[slideIndex].classList.add('offscreen-left');
        slideIndex = (slideIndex + 1) % slides.length;
        slides[slideIndex].classList.remove('offscreen-right');
    }

    export function slidePrev() {
        for (let i = 0; i < slides.length; i++) {
            if (slides[i].classList.contains('offscreen-right')) {
                slides[i].classList.add('offscreen-left');
                slides[i].classList.remove('offscreen-right');
            }
        }
        slides[slideIndex].classList.add('offscreen-right');
        slideIndex = (slideIndex + 1) % slides.length;
        slides[slideIndex].classList.remove('offscreen-left');
    }
}