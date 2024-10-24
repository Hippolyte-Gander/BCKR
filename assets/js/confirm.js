function checker() {
    var result = confirm('Êtes-vous certain(e) de vouloir faire cette action ?');
    if (result == false) {
        event.preventDefault();
    }
}