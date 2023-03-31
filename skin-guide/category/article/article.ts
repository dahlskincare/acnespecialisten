namespace Article {
    const content: HTMLElement = document.querySelector('#content');
    const headers = content.querySelectorAll('h2');
    const navButtonsContainer: HTMLElement = document.querySelector('#nav-buttons-scroller').querySelector('.flex-row');

    class Anchor {
        constructor(button: HTMLElement, slider: HTMLElement, after: HTMLImageElement, bounds: DOMRect) {
            this.button = button;
            this.slider = slider;
            this.after = after;
            this.bounds = bounds;
        }

        button: HTMLElement = null
        slider: HTMLElement = null
        after: HTMLImageElement = null
        bounds: DOMRect = null
    }

    var dragged: Anchor = null;

    function onResultOverlayDown(e: Event) {
        let anchor = e.target as HTMLElement;
        dragged = new Anchor(
            anchor,
            anchor.parentElement,
            anchor.parentElement.parentElement.children[1] as HTMLImageElement,
            anchor.parentElement.parentElement.getBoundingClientRect(),
        );

        console.log(dragged.bounds.width);
    }

    function onResultOverlayMove(e: Event) {
        if (dragged !== null) {
            e.preventDefault();
            let clientX = 0;
            if (e instanceof MouseEvent) clientX = e.clientX;
            else if (e instanceof TouchEvent) clientX = e.touches[0].clientX;

            let left = Math.min(dragged.bounds.width, Math.max(0, -(dragged.bounds.left - clientX)));
            dragged.slider.style.marginLeft = `${left}px`;
            dragged.after.style.clipPath = `polygon(${left}px 0, 100% 0%, 100% 100%, ${left}px 100%)`
        }
    }

    function onResultOverlayUp(_e: Event) {
        dragged = null;
    }

    headers.forEach((headerEl) => {
        const button = document.createElement("div");
        button.innerText = headerEl.innerText;
        button.className = 'nav-button';
        button.onclick = () => {
            if (window.innerWidth < 800) {
                headerEl.scrollIntoView();
            } else {
                headerEl.scrollIntoView();
            }
        }
        navButtonsContainer.appendChild(button);
    });

    document.querySelectorAll('.result-overlay').forEach((resultOverlay) => {
        let button = resultOverlay.querySelector('.ro-slider-button');
        if (button != undefined) {
            button.addEventListener('mousedown', onResultOverlayDown, { passive: true });
            button.addEventListener('touchstart', onResultOverlayDown, { passive: true });
        }

        resultOverlay.addEventListener('mousemove', onResultOverlayMove, { passive: false });
        resultOverlay.addEventListener('touchmove', onResultOverlayMove, { passive: false });
    });

    document.addEventListener('mouseup', onResultOverlayUp, { passive: true });
    document.addEventListener('touchend', onResultOverlayUp, { passive: true });

    document.querySelectorAll('.faq-category').forEach((category: HTMLElement) => {
        if (category.children.length == 2) {
            const title = category.children[0] as HTMLElement;
            const content = category.children[1] as HTMLElement;
            title.onclick = (_e) => {
                if (content.classList.contains('is-hidden')) {
                    content.classList.remove('is-hidden');
                } else {
                    content.classList.add('is-hidden');
                }
            }
        }
    });

}