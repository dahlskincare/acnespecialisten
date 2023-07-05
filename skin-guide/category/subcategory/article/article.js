var Article;
(function (Article) {
    var content = document.querySelector('#content');
    var navAnchors = content.querySelectorAll('.nav-anchor');
    var navButtons = document.querySelector('section#nav-buttons');
    var navButtonsContent = navButtons.querySelector('#nav-buttons-scroller').querySelector('.flex-row');
    if (navAnchors.length > 0) {
        navButtons.classList.remove('is-hidden');
        navAnchors.forEach(function (anchor) {
            var button = document.createElement("div");
            button.innerText = anchor.innerText;
            button.className = 'nav-button';
            button.onclick = function () {
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
        var scroller_1 = navButtonsContent.parentElement;
        var prev_1 = scroller_1.parentElement.querySelector('#scroll-prev');
        var next_1 = scroller_1.parentElement.querySelector('#scroll-next');
        scroller_1.addEventListener('scroll', function () {
            var showNext = scroller_1.scrollWidth - scroller_1.scrollLeft > scroller_1.clientWidth;
            var showPrevious = scroller_1.scrollLeft > 0;
            if (showNext) {
                next_1.classList.remove('is-hidden');
            }
            else {
                next_1.classList.add('is-hidden');
            }
            if (showPrevious) {
                prev_1.classList.remove('is-hidden');
            }
            else {
                prev_1.classList.add('is-hidden');
            }
        });
        prev_1.addEventListener('click', function () {
            scroller_1.scrollBy(-133, 0);
        });
        next_1.addEventListener('click', function () {
            scroller_1.scrollBy(133, 0);
        });
        if (scroller_1.scrollWidth > scroller_1.clientWidth) {
            next_1.classList.remove('is-hidden');
        }
    }
    document.querySelectorAll('.faq-category').forEach(function (category) {
        if (category.children.length == 2) {
            var title = category.children[0];
            var content_1 = category.children[1];
            title.onclick = function (_e) {
                if (content_1.classList.contains('zero-size')) {
                    content_1.classList.remove('zero-size');
                }
                else {
                    content_1.classList.add('zero-size');
                }
            };
        }
    });
})(Article || (Article = {}));
//# sourceMappingURL=article.js.map