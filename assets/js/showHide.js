const showBtns = document.getElementsByClassName('afficher-message');
Array.from(showBtns).forEach(showBtn => {
    // sélectionner la div à faire apparaître
    const messageDiv = document.querySelector('.message-masque');
    showBtn.addEventListener('click', function() {
        // afficher le message s'il est masqué
        if (messageDiv.classList.contains('message-masque')) {
            messageDiv.classList.remove('message-masque');
            messageDiv.classList.add('message-montre');
            // masquer le message s'il est affiché
        } else {
            messageDiv.classList.add('message-masque');
            messageDiv.classList.remove('message-montre');
        }
      });
});