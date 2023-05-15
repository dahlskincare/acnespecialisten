namespace ConsultationCategory {
    export function toggleVisible(button: Element) {
        const widget = button.parentElement.parentElement;
        widget.classList.toggle('expanded');
    }
}