namespace ConsultationCategory {
    export function toggleVisible(button: Element) {
        const widget = button.parentElement.parentElement;
        widget.classList.toggle('expanded');
        //const header = widget.children[0];
        //const content = widget.children[1];
        //content.classList.toggle('is-hidden');
    }
}