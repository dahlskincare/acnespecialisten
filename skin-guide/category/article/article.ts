namespace Article {
    const content: HTMLElement = document.querySelector('#content');
    const headers = content.querySelectorAll('h2');
    const navButtonsContainer: HTMLElement = document.querySelector('#nav-buttons-scroller').querySelector('.flex-row');

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

    function onDown(e: Event) {
        let anchor = e.target as HTMLElement;
        dragged = new Anchor(
            anchor,
            anchor.parentElement,
            anchor.parentElement.parentElement.children[1] as HTMLImageElement,
            anchor.parentElement.parentElement.getBoundingClientRect(),
        );

        console.log(dragged.bounds.width);
    }

    function onMove(e: Event) {
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

    function onUp(_e: Event) {
        dragged = null;
    }

    document.querySelectorAll('.result-overlay').forEach((resultOverlay) => {
        let button = resultOverlay.querySelector('.ro-slider-button');
        if (button != undefined) {
            button.addEventListener('mousedown', onDown, { passive: true });
            button.addEventListener('touchstart', onDown, { passive: true });
        }

        resultOverlay.addEventListener('mousemove', onMove, { passive: false });
        resultOverlay.addEventListener('touchmove', onMove, { passive: false });
    });


    document.addEventListener('mouseup', onUp, { passive: true });
    document.addEventListener('touchend', onUp, { passive: true });

}