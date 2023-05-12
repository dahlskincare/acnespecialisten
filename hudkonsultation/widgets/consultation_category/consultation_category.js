var ConsultationCategory;
(function (ConsultationCategory) {
    function toggleVisible(button) {
        var widget = button.parentElement.parentElement;
        widget.classList.toggle('expanded');
        //const header = widget.children[0];
        //const content = widget.children[1];
        //content.classList.toggle('is-hidden');
    }
    ConsultationCategory.toggleVisible = toggleVisible;
})(ConsultationCategory || (ConsultationCategory = {}));
//# sourceMappingURL=consultation_category.js.map