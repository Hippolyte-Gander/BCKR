const boutons = document.querySelectorAll('button');
boutons.forEach(bouton => {
  bouton.addEventListener('click', function() {
    if (bouton.clicked) {
      bouton.disabled = true;
      console.log('Un bouton bloqué');
    } else {
      bouton.clicked = true;
    }
  });
});