function openConfirmForm(button, formId) {
    const form = document.querySelector(formId);
    button.remove();
    form.classList.remove('is-hidden');
}
function onFileDrop(e) {
    e.preventDefault();
    const input = document.querySelector('#upload-input');
    //
    if (e.dataTransfer.files.length == 1) {
        const file = e.dataTransfer.files[0];
        if (file.size > 4194304) {
            alert("File is too big! (max 4mb)");
            input.value = "";
        }
        else {
            document.querySelector('#upload-input').files = e.dataTransfer.files;
            document.querySelector('#upload-button').innerHTML = `${file.name} (${Math.round(file.size / 1024)}kb)`;
        }
    }
}
let physical = false;
function onPhysicalChange(e) {
    let input = e.parentElement.querySelector('input');
    physical = !physical;
    input.value = physical ? 'on' : 'off';
    console.log(input.value);
    document.querySelectorAll('.physicalAddressDetails').forEach((el) => {
        if (input.value == 'on') {
            el.classList.remove('is-hidden');
        }
        else {
            el.classList.add('is-hidden');
        }
    });
}
function onAmountChange(event) {
    const select = event.target;
    // reload url with new amount
    window.location.href = window.location.href.split('?')[0] + '?amount=' + select.value;
}
function onFileChange(e) {
    const input = e.target;
    if (input.files.length > 0) {
        const file = input.files[0];
        if (file.size > 4194304) {
            alert("File is too big! (max 4mb)");
            input.value = "";
        }
        document.querySelector('#upload-button').innerHTML = `${file.name} (${Math.round(file.size / 1024)}kb)`;
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
if (window.location.search.includes('sent')) {
    if (window.innerWidth >= 1024) {
        document.querySelector('#step-2-large').scrollIntoView();
        openConfirmForm(document.querySelector('#large-form-button'), '#large-form');
    }
    else {
        document.querySelector('#step-2-small').scrollIntoView();
        openConfirmForm(document.querySelector('#small-form-button'), '#small-form');
    }
}
//# sourceMappingURL=gift-cards.js.map