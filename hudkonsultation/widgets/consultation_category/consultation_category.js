var ConsultationCategory;
(function (ConsultationCategory) {
    function toggleVisible(button) {
        var widget = button.parentElement.parentElement;
        var content = widget.children[1];
        content.classList.toggle('is-hidden');
    }
    ConsultationCategory.toggleVisible = toggleVisible;
})(ConsultationCategory || (ConsultationCategory = {}));
//# sourceMappingURL=consultation_category.js.map