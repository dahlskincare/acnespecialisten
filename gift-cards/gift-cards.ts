function openConfirmForm(button: HTMLButtonElement) {
    const form = button.parentElement.querySelector('.confirm-form')!;
    button.remove();
    form.classList.remove('is-hidden');
}