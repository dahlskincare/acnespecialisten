var content = document.querySelector('#content');
var headers = content.querySelectorAll('h2');
var navButtonsContainer = document.querySelector('#nav-buttons-scroller').querySelector('.flex-row');
headers.forEach(function (headerEl) {
    var button = document.createElement("div");
    button.innerText = headerEl.innerText;
    button.className = 'nav-button';
    button.onclick = function () {
        if (window.innerWidth < 800) {
            //window.scrollTo(0, headerEl.clientTop + window.innerHeight - 100);
            headerEl.scrollIntoView();
        }
        else {
            //window.scrollTo(0, headerEl.clientTop + window.innerHeight);¨
            headerEl.scrollIntoView();
        }
    };
    navButtonsContainer.appendChild(button);
});
//# sourceMappingURL=article.js.map