// Fonction empêchant la date de fin d'événement d'être avant celle du début 
document.addEventListener('DOMContentLoaded', function() {
    // Sélectionne la date de début via son ID
    const dateDebutInput = document.getElementById('evenement_dateDebut');
    // Sélectionne la date de fin via son ID
    const dateFinInput = document.getElementById('evenement_dateFin');

    // Vérifie s'il y a un changement du champ "dateDebut"
    dateDebutInput.addEventListener('change', function() {
        const dateDebutValue = new Date(dateDebutInput.value);

        if (dateDebutValue) {
            // Oblige la date minimum de fin comme étant la date de début
            dateFinInput.min = dateDebutValue.toISOString().slice(0, 16);

            // Si la date de fin est antérieure à la date de début, reset la saisie de la date de fin
            if (new Date(dateFinInput.value) < dateDebutValue) {
                dateFinInput.value = '';
            }
        }
    });

    // Vérifier les changement de saisie de la date de fin
    dateFinInput.addEventListener('change', function() {
        const dateFinValue = new Date(dateFinInput.value);
        const dateDebutValue = new Date(dateDebutInput.value);

        // Si la date de fin est antérieure à la date de début, reset la saisie de la date de fin
        if (dateFinValue < dateDebutValue) {
            alert('La date de fin ne peut pas être avant la date de début!');
            dateFinInput.value = '';
        }
    });
});