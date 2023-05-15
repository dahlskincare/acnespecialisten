namespace Consultation {
    // Toggle the visibility of infobox content
    export function toggleContent(element: HTMLElement) {
        const content = element.querySelector('.ib-content') as HTMLElement;
        const icon = element.querySelector('.icon') as HTMLElement;
        content.classList.toggle('is-hidden');
        icon.classList.toggle('is-open');
    }
}