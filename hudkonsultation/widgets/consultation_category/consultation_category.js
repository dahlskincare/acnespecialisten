var ConsultationCategory;
(function (ConsultationCategory) {
    function toggleVisible(button) {
        var widget = button.parentElement.parentElement;
        widget.classList.toggle('expanded');
    }
    ConsultationCategory.toggleVisible = toggleVisible;
})(ConsultationCategory || (ConsultationCategory = {}));
//# sourceMappingURL=consultation_category.js.map