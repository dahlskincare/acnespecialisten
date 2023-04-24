var TreatmentAreas;
(function (TreatmentAreas) {
    function toggleSelected(card, container) {
        var selectAll = container.querySelector('.select-all-card');
        if (card.classList.contains('selected')) {
            card.classList.remove('selected');
            if (selectAll != null) {
                selectAll.classList.remove('selected');
            }
        }
        else {
            card.classList.add('selected');
            if (selectAll != null) {
                var parent = card.parentElement;
                var cards = parent.querySelectorAll('.area-item-card');
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
    TreatmentAreas.toggleSelected = toggleSelected;
    function toggleAllSelected(container) {
        var cards = container.parentElement.querySelectorAll('.area-item-card');
        if (container.classList.contains('selected')) {
            container.classList.remove('selected');
            for (var i = 0; i < cards.length; i++) {
                cards[i].classList.remove('selected');
            }
        }
        else {
            container.classList.add('selected');
            for (var i = 0; i < cards.length; i++) {
                cards[i].classList.add('selected');
            }
        }
    }
    TreatmentAreas.toggleAllSelected = toggleAllSelected;
    function getSelectedIds(button) {
        var items = button.parentElement.querySelectorAll('.selected');
        console.log(items);
    }
    TreatmentAreas.getSelectedIds = getSelectedIds;
})(TreatmentAreas || (TreatmentAreas = {}));
//# sourceMappingURL=treatment_areas.js.map