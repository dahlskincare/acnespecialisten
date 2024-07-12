namespace Brands {
    const widget = document.querySelector('.brands-widget');
    const container = widget.querySelector('.flex-container') as HTMLElement;
    const leftMask = widget.querySelector('#brand-mask-left');
    const rightMask = widget.querySelector('#brand-mask-right');

    container.addEventListener('scroll', () => {
        // conditionally hide the left mask
        if (container.scrollLeft <= 0) {
            leftMask.classList.add('is-hidden');
        } else {
            leftMask.classList.remove('is-hidden');
        }

        // conditionally hide the right mask
        if (container.scrollLeft + container.offsetWidth >= container.scrollWidth) {
            rightMask.classList.add('is-hidden');
        } else {
            rightMask.classList.remove('is-hidden');
        }
    });

    export function scroll(dir: number): void {
        container.scrollBy({ left: 250 * dir });
    }
}