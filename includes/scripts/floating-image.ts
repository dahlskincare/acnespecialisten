window.addEventListener('scroll', onScroll, { passive: true });
let _floater = document.querySelector("#floater");
let _picture = _floater.querySelector('#floating-picture');
let _footerLarge = document.querySelector('#footer-large');

function onScroll(event: Event) {
    let distanceToBottom = document.documentElement.scrollHeight - document.documentElement.clientHeight - document.documentElement.scrollTop;

    /// +250 to include brands
    if (distanceToBottom - _footerLarge.clientHeight < -0.5 * _picture.clientHeight + 350) {
        _picture.classList.add('hidden');
    }
    else {
        _picture.classList.remove('hidden');
    }

    if (document.documentElement.scrollTop > 0) {
        _floater.classList.add('detached');
    }
    else {
        _floater.classList.remove('detached');
    }
}