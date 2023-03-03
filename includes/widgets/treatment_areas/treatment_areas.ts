namespace TreatmentAreas {
    export function toggleSelected(card: HTMLElement, container: HTMLElement) {
        let selectAll = container.querySelector('.select-all-card');
        if (card.classList.contains('selected')) {
            card.classList.remove('selected');
            if (selectAll != null) {
                selectAll.classList.remove('selected');
            }
        } else {
            card.classList.add('selected');
            if (selectAll != null) {
                let parent = card.parentElement;
                let cards = parent.querySelectorAll('.area-item-card');
                for (var i = 0; i < cards.length; i++) {
                    if (!cards[i].classList.contains('selected')) {
                        return;
                    }
                }
                // This only gets called if previous loop finishes
                selectAll.classList.add('selected');
            }

        }
    }

    export function toggleAllSelected(container: HTMLElement) {
        let cards = container.parentElement.querySelectorAll('.area-item-card');
        if (container.classList.contains('selected')) {
            container.classList.remove('selected');
            for (var i = 0; i < cards.length; i++) {
                cards[i].classList.remove('selected');
            }
        } else {
            container.classList.add('selected');
            for (var i = 0; i < cards.length; i++) {
                cards[i].classList.add('selected');
            }
        }

    }

    export function getSelectedIds(button: HTMLElement) {
        let items = button.parentElement.querySelectorAll('.selected');
        console.log(items);

    }
}