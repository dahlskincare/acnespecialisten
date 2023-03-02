namespace TreatmentAreas {
    export function toggleSelected(card: HTMLElement) {
        if (card.classList.contains('selected')) {
            card.classList.remove('selected');
        } else {
            card.classList.add('selected');
        }
    }

    export function getSelectedIds(button: HTMLElement) {
        let items = button.parentElement.querySelectorAll('.selected');
        console.log(items);

    }
}