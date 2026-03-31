namespace Article {
    const content = document.querySelector('#content') as HTMLElement;
    const navAnchors = content.querySelectorAll('.nav-anchor');
    const navButtons = document.querySelector('section#nav-buttons') as HTMLElement;
    const navButtonsContent = navButtons.querySelector('#nav-buttons-scroller')!.querySelector('.flex-row') as HTMLElement;

    if (navAnchors.length > 0) {
        navButtons.classList.remove('is-hidden');
        navAnchors.forEach((anchor) => {
            const button = document.createElement("div");
            button.innerText = (anchor as HTMLElement).innerText;
            button.className = 'nav-button';
            button.onclick = () => {
                if (window.innerWidth < 800) {
                    anchor.scrollIntoView();
                } else {
                    anchor.scrollIntoView();
                }
            }
            navButtonsContent.appendChild(button);
        });
    }


    if (document.body.clientWidth > 800) {
        const scroller = navButtonsContent.parentElement as HTMLElement;
        const prev = scroller.parentElement!.querySelector('#scroll-prev') as HTMLElement;
        const next = scroller.parentElement!.querySelector('#scroll-next') as HTMLElement;

        scroller.addEventListener('scroll', () => {
            let showNext = scroller.scrollWidth - scroller.scrollLeft > scroller.clientWidth;
            let showPrevious = scroller.scrollLeft > 0;

            if (showNext) {
                next.classList.remove('is-hidden');
            } else {
                next.classList.add('is-hidden');
            }

            if (showPrevious) {
                prev.classList.remove('is-hidden');
            } else {
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
    document.querySelectorAll('.faq-category').forEach((category: HTMLElement) => {
        if (category.children.length == 2) {
            const title = category.children[0] as HTMLElement;
            const content = category.children[1] as HTMLElement;
            title.onclick = (_e) => {
                if (content.classList.contains('zero-size')) {
                    content.classList.remove('zero-size');
                } else {
                    content.classList.add('zero-size');
                }
            }
        }
    });

}