function openConfirmForm(button, formId) {
    var form = document.querySelector(formId);
    button.remove();
    form.classList.remove('is-hidden');
}
function onFileDrop(e) {
    e.preventDefault();
    var input = document.querySelector('#upload-input');
    //
    if (e.dataTransfer.files.length == 1) {
        var file = e.dataTransfer.files[0];
        if (file.size > 4194304) {
            alert("File is too big! (max 4mb)");
            input.value = "";
        }
        else {
            document.querySelector('#upload-input').files = e.dataTransfer.files;
            document.querySelector('#upload-button').innerHTML = "".concat(file.name, " (").concat(Math.round(file.size / 1024), "kb)");
        }
    }
}
function onFileChange(e) {
    var input = e.target;
    if (input.files.length > 0) {
        var file = input.files[0];
        if (file.size > 4194304) {
            alert("File is too big! (max 4mb)");
            input.value = "";
        }
        document.querySelector('#upload-button').innerHTML = "".concat(file.name, " (").concat(Math.round(file.size / 1024), "kb)");
    }
}
if (window.location.search.length > 0) {
    if (window.innerWidth >= 1024) {
        document.querySelector('#step-2-large').scrollIntoView();
    }
    else {
        document.querySelector('#step-2-small').scrollIntoView();
    }
}
//# sourceMappingURL=gift-cards.js.map