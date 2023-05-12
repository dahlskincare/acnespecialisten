namespace ConsultationCategory {
    export function toggleVisible(button: Element) {
        const widget = button.parentElement.parentElement
        const content = widget.children[1];
        content.classList.toggle('is-hidden');
    }
}