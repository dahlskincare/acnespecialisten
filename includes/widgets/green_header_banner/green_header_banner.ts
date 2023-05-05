namespace GreenHeaderBanner {
    export function onReadMoreClick(source: HTMLElement) {
        source.parentElement.querySelector('#banner-expanded').classList.remove('is-hidden');
        source.remove();
    }
}