const content: HTMLElement = document.querySelector('#content');
const headers = content.querySelectorAll('h2');
const navButtonsContainer: HTMLElement = document.querySelector('#nav-buttons-scroller').querySelector('.flex-row');

headers.forEach((headerEl) => {
    const button = document.createElement("div");
    button.innerText = headerEl.innerText;
    button.className = 'nav-button';
    button.onclick = () => {
        if (window.innerWidth < 800) {
            headerEl.scrollIntoView();
        } else {
            headerEl.scrollIntoView();
        }
    }
    navButtonsContainer.appendChild(button);
});