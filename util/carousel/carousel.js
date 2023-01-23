Carousel = {
    prev: (carouselId) => {
        const carousel = document.querySelector(carouselId);
        let child = carousel.children[0];
        carousel.scrollLeft -= child.getBoundingClientRect().width;
    },
    next: (carouselId) => {
        const carousel = document.querySelector(carouselId);
        let child = carousel.children[0];
        carousel.scrollLeft += child.getBoundingClientRect().width;
    }
}