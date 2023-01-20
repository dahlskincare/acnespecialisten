
Result = {
    anchor: null,
    divider: null,
    after: null,
    bounds: null,
    onAnchorMouseDown: (element) => {
        Result.anchor = element;
        Result.divider = element.parentElement;
        Result.widget = Result.divider.parentElement;
        Result.after = Result.divider.parentElement.children[1];
        Result.bounds = Result.widget.getBoundingClientRect();
    },
    onMouseMove: (event) => {
        if (Result.anchor !== null) {
            event.preventDefault();
            let clientX = event.touches == undefined ? event.clientX : event.touches[0].clientX;
            let left = Math.min(Result.bounds.width, Math.max(0, -(Result.bounds.left - clientX)));
            Result.divider.style.left = `${left}px`;
            Result.after.style.width = `${left}px`;
        }
    }
}

document.onmouseup = document.ontouchend = () => {
    Result.anchor = Result.divider = Result.widget = Result.after = Result.bounds = null;
}
