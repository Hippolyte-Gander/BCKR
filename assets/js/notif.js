// fonction pour afficher les flash messages pendant 5s puis les fait disparaître
function hideMsg() {
    let alerts = document.getElementsByClassName('alert');
    for (let i = 0; i < alerts.length; i++) {
        alerts[i].style.visibility = "hidden";
    }
    
    let successes = document.getElementsByClassName('flash-success');
    for (let i = 0; i < successes.length; i++) {
        successes[i].style.visibility = "hidden";
    }
    
    let dangers = document.getElementsByClassName('flash-danger');
    for (let i = 0; i < dangers.length; i++) {
        dangers[i].style.visibility = "hidden";
    }
}

setTimeout(hideMsg, 5000);