function onReadMoreClick() {
    //let button = event.target as Element;
    let collapsed = document.querySelector('#problems-banner-collapsed');
    collapsed.remove();
    document.querySelector('#problems-banner-expanded').classList.remove('is-hidden');
}