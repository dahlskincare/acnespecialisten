var Forms;
(function (Forms) {
    var selectWrappers = document.querySelectorAll('.select-wrapper');
    document.onclick = function (_) {
        selectWrappers.forEach(function (wrapper) {
            wrapper.classList.remove('active');
        });
    };
    selectWrappers.forEach(function (wrapper) {
        var select = wrapper.children[0];
        select.onclick = function (e) {
            if (wrapper.classList.contains('active')) {
                wrapper.classList.remove('active');
            }
            else {
                wrapper.classList.add('active');
            }
            e.stopPropagation();
        };
    });
})(Forms || (Forms = {}));
//# sourceMappingURL=forms.js.map