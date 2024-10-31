// laisser afficher les éléments hover quand cliqués -> marche pas
// const btnsHomepage = document.querySelectorAll('add-hover-btn');
// btnsHomepage.forEach(btnHomepage => {
//   btnHomepage.addEventListener('click', function () {
//     btnHomepage.classList.add('hover');
//     });
// });

// ajouter la classe 'show' à tous les éléments visibles à l'écran et l'enlève lorsqu'ils n'y sont plus
// ajoute la classe 'shown' aux éléments pour qu'il n'apparaissent qu'une fois
const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('show');
            entry.target.classList.add('shown');
        } else {
            entry.target.classList.remove('show');
        }
    });
});

const hiddenElements = document.querySelectorAll('.hidden');
hiddenElements.forEach((element) => observer.observe(element));