// laisser afficher les éléments hover quand cliqués -> marche pas
// const btnsHomepage = document.querySelectorAll('add-hover-btn');
// btnsHomepage.forEach(btnHomepage => {
//   btnHomepage.addEventListener('click', function () {
//     btnHomepage.classList.add('hover');
//     });
// });

// ------------------ Fonction pour gérer les classes 'hidden' et 'show' ------------------

// on sélectionne les éléments avec la classe 'hidden'
const hiddenElements = document.querySelectorAll('.hidden');
// on sélectionne les éléments avec la classe 'hidden-once'
const hiddenOnceElements = document.querySelectorAll('.hidden-once');

// on crée un nouvel observateur pour détecter la visibilité
const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        const element = entry.target;
        
        // si l'élément est visible
        if (entry.isIntersecting) {
            // si l'élément a la classe 'hidden-once'
            if (element.classList.contains('hidden-once')) {
                // on ajoute la classe 'show'
                element.classList.add('show');
                // on arrête d'observer l'élément
                observer.unobserve(element); 
            }
            // si l'élément a la classe 'hidden'
            else if (element.classList.contains('hidden')) {
                // ajoute la classe 'show'
                element.classList.add('show');
            }
        } else {
            // si l'élément a la classe 'hidden'
            if (element.classList.contains('hidden')) {
                // retire la classe 'show' (quand n'est plus observé)
                element.classList.remove('show');
            }
        }
    });
});

// on observe tous les éléments 'hidden' et 'hidden-once'
hiddenElements.forEach((element) => observer.observe(element));
hiddenOnceElements.forEach((element) => observer.observe(element));