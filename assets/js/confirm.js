// fonction demandant de confirmer quand on clique sur une action importante (ex: supprimer / modifier un élément etc)
function checker() {
    var result = confirm('Êtes-vous certain(e) de vouloir faire cette action ?');
    if (result == false) {
        event.preventDefault();
    }
}
function deleteConfirmation() {
    var result = confirm('Êtes-vous certain(e) de vouloir supprimer votre compte de manière permanente ?');
    if (result == false) {
        event.preventDefault();
    }
}