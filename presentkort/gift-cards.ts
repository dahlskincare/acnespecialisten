function openConfirmForm(button: HTMLButtonElement, formId: string) {
    const form = document.querySelector(formId)!;
    button.remove();
    form.classList.remove('is-hidden');
}

function onFileDrop(e: DragEvent) {
    e.preventDefault();
    const input = (document.querySelector('#upload-input') as HTMLInputElement);
    //
    if (e.dataTransfer.files.length == 1) {
        const file = e.dataTransfer.files[0];
        if (file.size > 4194304) {
            alert("File is too big! (max 4mb)");
            input.value = "";
        } else {
            (document.querySelector('#upload-input') as HTMLInputElement).files = e.dataTransfer.files;
            document.querySelector('#upload-button').innerHTML = `${file.name} (${Math.round(file.size / 1024)}kb)`;
        }
    }
}

function onPhysicalChange() {
    console.log('hej');
}

function onAmountChange(event: Event) {
    const select = event.target as HTMLSelectElement;
    // reload url with new amount
    window.location.href = window.location.href.split('?')[0] + '?amount=' + select.value;
}

function onFileChange(e: Event) {
    const input = (e.target as HTMLInputElement);
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
    } else {
        document.querySelector('#step-1-small').scrollIntoView();
    }
}

// if window location search text contains 'paid' then scroll to step 2
if (window.location.search.includes('paid')) {
    if (window.innerWidth >= 1024) {
        document.querySelector('#step-2-large').scrollIntoView();
    } else {
        document.querySelector('#step-2-small').scrollIntoView();
    }
}