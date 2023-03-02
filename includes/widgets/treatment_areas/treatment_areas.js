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
})(TreatmentAreas || (TreatmentAreas = {}));
//# sourceMappingURL=treatment_areas.js.map