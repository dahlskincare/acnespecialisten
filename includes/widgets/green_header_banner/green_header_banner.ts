namespace GreenHeaderBanner {
    export function onReadMoreClick(source: HTMLElement) {
        source.parentElement.querySelector('#banner-expanded').classList.remove('zero-size');
        source.remove();
    }
}