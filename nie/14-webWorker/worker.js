let i = 0;
function counter() {
    postMessage(i++);
    setTimeout('counter()', 500);
}
counter();