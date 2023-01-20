
Result = {
    anchor: null,
    divider: null,
    after: null,
    bounds: null,
}

onDown = (event) => {
    Result.anchor = event.target;
    Result.divider = Result.anchor.parentElement;
    Result.widget = Result.divider.parentElement;
    Result.after = Result.divider.parentElement.children[1];
    Result.bounds = Result.widget.getBoundingClientRect();
}

onUp = () => {
    Result.anchor = Result.divider = Result.widget = Result.after = Result.bounds = null;
}

onMove = (event) => {
    if (Result.anchor !== null) {
        event.preventDefault();
        let clientX = event.touches == undefined ? event.clientX : event.touches[0].clientX;
        let left = Math.min(Result.bounds.width, Math.max(0, -(Result.bounds.left - clientX)));
        Result.divider.style.left = `${left}px`;
        Result.after.style.width = `${left}px`;
    }
}

document.addEventListener('DOMContentLoaded', () => {
    document.addEventListener('mouseup', onUp, { passive: true });
    document.addEventListener('touchend', onUp, { passive: true });
    let widgets = document.querySelectorAll('.result-widget');
    for (let widget of widgets) {
        let anchor = widget.querySelector('.drag-anchor');
        anchor.addEventListener('mousedown', onDown, { passive: true });
        anchor.addEventListener('touchstart', onDown, { passive: true });
        widget.addEventListener('mousemove', onMove, { passive: false });
        widget.addEventListener('touchmove', onMove, { passive: false });
    }
}, false);
