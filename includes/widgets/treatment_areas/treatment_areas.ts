namespace TreatmentAreas {
    export function toggleSelected(card: HTMLElement) {
        if (card.classList.contains('selected')) {
            card.classList.remove('selected');
        } else {
            card.classList.add('selected');
        }
    }
}