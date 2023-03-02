var TreatmentAreas;
(function (TreatmentAreas) {
    function toggleSelected(card) {
        if (card.classList.contains('selected')) {
            card.classList.remove('selected');
        }
        else {
            card.classList.add('selected');
        }
    }
    TreatmentAreas.toggleSelected = toggleSelected;
    function getSelectedIds(button) {
        var items = button.parentElement.querySelectorAll('.selected');
        console.log(items);
    }
    TreatmentAreas.getSelectedIds = getSelectedIds;
})(TreatmentAreas || (TreatmentAreas = {}));
//# sourceMappingURL=treatment_areas.js.map