function openConfirmForm(button: HTMLButtonElement, formId: string) {
    const form = document.querySelector(formId)!;
    button.remove();
    form.classList.remove('is-hidden');
}

function onFileDrop(e: DragEvent) {
    e.preventDefault();
    (document.querySelector('#upload-input') as HTMLInputElement).files = e.dataTransfer.files;
    if (e.dataTransfer.files.length > 0) {
        const file = e.dataTransfer.files[0];
        document.querySelector('#upload-button').innerHTML = `${file.name} (${Math.round(file.size / 1024)}kb)`;
    }
}

function onFileChange(e: Event) {
    const input = (e.target as HTMLInputElement);
    if (input.files.length > 0) {
        const file = input.files[0];
        document.querySelector('#upload-button').innerHTML = `${file.name} (${Math.round(file.size / 1024)}kb)`;
    }
}

