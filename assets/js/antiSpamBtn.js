const boutons = document.querySelectorAll('button');
boutons.forEach(bouton => {
  bouton.addEventListener('click', function() {
    if (bouton.clicked) {
      bouton.disabled = true;
      setTimeout(bouton.disabled = false, 5000);
    } else {
      bouton.clicked = true;
    }
  });
});

// function desactiverBouton5s() {
//   // on désactive le bouton
//   bouton.disabled = true;
//   // on réactive le bouton après 5s
//   setTimeout(() => {
//     bouton.disabled = false;
//   }, 5000);
// }

// boutons.forEach(bouton => {
//   bouton.addEventListener("click", desactiverBouton5s);
// });
