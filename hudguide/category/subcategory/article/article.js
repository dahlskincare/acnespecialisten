var Article;
(function (Article) {
    const content = document.querySelector('#content');
    const navAnchors = content.querySelectorAll('.nav-anchor');
    const navButtons = document.querySelector('section#nav-buttons');
    const navButtonsContent = navButtons.querySelector('#nav-buttons-scroller').querySelector('.flex-row');
    if (navAnchors.length > 0) {
        navButtons.classList.remove('is-hidden');
        navAnchors.forEach((anchor) => {
            const button = document.createElement("div");
            button.innerText = anchor.innerText;
            button.className = 'nav-button';
            button.onclick = () => {
                if (window.innerWidth < 800) {
                    anchor.scrollIntoView();
                }
                else {
                    anchor.scrollIntoView();
                }
            };
            navButtonsContent.appendChild(button);
        });
    }
    if (document.body.clientWidth > 800) {
        const scroller = navButtonsContent.parentElement;
        const prev = scroller.parentElement.querySelector('#scroll-prev');
        const next = scroller.parentElement.querySelector('#scroll-next');
        scroller.addEventListener('scroll', () => {
            let showNext = scroller.scrollWidth - scroller.scrollLeft > scroller.clientWidth;
            let showPrevious = scroller.scrollLeft > 0;
            if (showNext) {
                next.classList.remove('is-hidden');
            }
            else {
                next.classList.add('is-hidden');
            }
            if (showPrevious) {
                prev.classList.remove('is-hidden');
            }
            else {
                prev.classList.add('is-hidden');
            }
        });
        prev.addEventListener('click', () => {
            scroller.scrollBy(-133, 0);
        });
        next.addEventListener('click', () => {
            scroller.scrollBy(133, 0);
        });
        if (scroller.scrollWidth > scroller.clientWidth) {
            next.classList.remove('is-hidden');
        }
    }
    document.querySelectorAll('.faq-category').forEach((category) => {
        if (category.children.length == 2) {
            const title = category.children[0];
            const content = category.children[1];
            title.onclick = (_e) => {
                if (content.classList.contains('zero-size')) {
                    content.classList.remove('zero-size');
                }
                else {
                    content.classList.add('zero-size');
                }
            };
        }
    });
})(Article || (Article = {}));
//# sourceMappingURL=article.js.map