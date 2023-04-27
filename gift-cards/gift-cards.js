function openConfirmForm(button, formId) {
    var form = document.querySelector(formId);
    button.remove();
    form.classList.remove('is-hidden');
}
function onFileDrop(e) {
    e.preventDefault();
    document.querySelector('#upload-input').files = e.dataTransfer.files;
    if (e.dataTransfer.files.length > 0) {
        var file = e.dataTransfer.files[0];
        document.querySelector('#upload-button').innerHTML = "".concat(file.name, " (").concat(Math.round(file.size / 1024), "kb)");
    }
}
function onFileChange(e) {
    var input = e.target;
    if (input.files.length > 0) {
        var file = input.files[0];
        document.querySelector('#upload-button').innerHTML = "".concat(file.name, " (").concat(Math.round(file.size / 1024), "kb)");
    }
}
//# sourceMappingURL=gift-cards.js.map