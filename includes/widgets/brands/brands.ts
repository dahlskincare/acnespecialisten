namespace Brands {
    const widget = document.querySelector('.brands-widget') as HTMLElement;
    const container = widget.querySelector('.flex-container') as HTMLElement;
    const leftMask = widget.querySelector('#brand-mask-left');
    const rightMask = widget.querySelector('#brand-mask-right');

    if (container.scrollWidth > container.clientWidth + 20) {
        rightMask.classList.remove('is-hidden');
    }



    container.addEventListener('scroll', () => {
        // conditionally hide the left mask
        if (container.scrollLeft <= 0) {
            leftMask.classList.add('is-hidden');
        } else {
            leftMask.classList.remove('is-hidden');
        }

        // conditionally hide the right mask
        if (container.scrollLeft + container.offsetWidth >= container.scrollWidth - 30) {
            rightMask.classList.add('is-hidden');
        } else {
            rightMask.classList.remove('is-hidden');
        }
    });

    export function scroll(dir: number): void {
        container.scrollBy({ left: 450 * dir });
    }
}