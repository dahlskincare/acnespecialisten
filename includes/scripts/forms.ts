namespace Forms {
    const selectWrappers = document.querySelectorAll('.select-wrapper');

    document.onclick = (_) => {
        selectWrappers.forEach((wrapper) => {
            wrapper.classList.remove('active');
        });
    }


    selectWrappers.forEach((wrapper) => {
        const select = wrapper.children[0] as HTMLSelectElement;


        select.onclick = (e) => {
            if (wrapper.classList.contains('active')) {
                wrapper.classList.remove('active');
            }
            else {
                wrapper.classList.add('active');
            }
            e.stopPropagation();
        }

    });

} 