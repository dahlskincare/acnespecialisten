window.addEventListener('scroll', onScroll, { passive: true });

let picture = document.querySelector('#floating-picture');
let footerLarge = document.querySelector('#footer-large');

function onScroll(event: Event) {
    let distanceToBottom = document.documentElement.scrollHeight - document.documentElement.clientHeight - document.documentElement.scrollTop;


    if (distanceToBottom - footerLarge.clientHeight < -0.5 * picture.clientHeight) {
        picture.classList.add('hidden');
    }
    else {
        picture.classList.remove('hidden');
    }

    if (document.documentElement.scrollTop > 0) {
        picture.classList.add('faded');
    }
    else {
        picture.classList.remove('faded');
    }
}