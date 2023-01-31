window.addEventListener('scroll', onScroll, { passive: true });

let picture = document.querySelector('#picture');

function onScroll(event: Event) {
    if (document.documentElement.scrollTop > 0) {
        picture.classList.add('faded');
    }
    else {
        picture.classList.remove('faded');
    }
}