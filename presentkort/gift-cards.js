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
var physical = false;
function onPhysicalChange(e) {
    var input = e.parentElement.querySelector('input');
    physical = !physical;
    input.value = physical ? 'on' : 'off';
    console.log(input.value);
    document.querySelectorAll('.physicalAddressDetails').forEach(function (el) {
        if (input.value == 'on') {
            el.classList.remove('is-hidden');
        }
        else {
            el.classList.add('is-hidden');
        }
    });
}
function onAmountChange(event) {
    var select = event.target;
    // reload url with new amount
    window.location.href = window.location.href.split('?')[0] + '?amount=' + select.value;
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
// if window location search text contains 'amount' then scroll to step 1
if (window.location.search.includes('amount')) {
    if (window.innerWidth >= 1024) {
        document.querySelector('#step-1-large').scrollIntoView();
    }
    else {
        document.querySelector('#step-1-small').scrollIntoView();
    }
}
// if window location search text contains 'paid' then scroll to step 2
if (window.location.search.includes('paid')) {
    if (window.innerWidth >= 1024) {
        document.querySelector('#step-2-large').scrollIntoView();
    }
    else {
        document.querySelector('#step-2-small').scrollIntoView();
    }
}
//# sourceMappingURL=gift-cards.js.map