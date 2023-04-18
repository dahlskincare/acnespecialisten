namespace Reviews {
    export function scroll(step: number) {
        const scroller = document.querySelector('.reviews-widget');
        scroller.children[0].scrollBy(step * (scroller.getBoundingClientRect().width) - step * 1, 0);
    }

}