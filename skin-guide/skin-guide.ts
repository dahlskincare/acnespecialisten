namespace SkinGuide {
    export function onReadMoreClick() {
        let collapsed = document.querySelector('#problems-banner-collapsed');
        collapsed.remove();
        document.querySelector('#problems-banner-expanded').classList.remove('is-hidden');
    }
}