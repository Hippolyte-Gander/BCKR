function hideMsg() {
    let elements = document.getElementsByClassName('alert');
    for (let i = 0; i < elements.length; i++) {
        elements[i].style.visibility = "hidden";
    }
}

setTimeout(hideMsg, 5000);