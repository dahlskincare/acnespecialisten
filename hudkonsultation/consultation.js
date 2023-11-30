var Consultation;
(function (Consultation) {
    // Toggle the visibility of infobox content
    function toggleContent(element) {
        var content = element.querySelector('.ib-content');
        var icon = element.querySelector('.icon');
        content.classList.toggle('zero-size');
        icon.classList.toggle('is-open');
    }
    Consultation.toggleContent = toggleContent;
})(Consultation || (Consultation = {}));
//# sourceMappingURL=consultation.js.map