namespace BrandsPage {

    let scroller: HTMLElement;


    document.addEventListener('DOMContentLoaded', () => {
        const container = document.querySelector('#brands-container');
        const brands = container.querySelector('#brands') as HTMLElement;
        scroller = brands.querySelector('#brands-shadow') as HTMLElement;
        const leftMask = container.querySelector('#scroll-button-previous') as HTMLElement;
        const rightMask = container.querySelector('#scroll-button-next') as HTMLElement;

        if (scroller.scrollWidth > scroller.clientWidth + 20) {
            rightMask.classList.remove('is-hidden');
        }

        leftMask.onclick = () => scroll(-1);
        rightMask.onclick = () => scroll(1);


        scroller.addEventListener('scroll', () => {
            // conditionally hide the left mask
            if (scroller.scrollLeft <= 0) {
                leftMask.classList.add('is-hidden');
            } else {
                leftMask.classList.remove('is-hidden');
            }

            // conditionally hide the right mask
            if (scroller.scrollLeft + scroller.offsetWidth >= scroller.scrollWidth - 30) {
                rightMask.classList.add('is-hidden');
            } else {
                rightMask.classList.remove('is-hidden');
            }
        });
    });

    export function scroll(dir: number): void {
        if (scroller != undefined) {
            scroller.scrollBy({ left: 450 * dir });
        }
    }
}