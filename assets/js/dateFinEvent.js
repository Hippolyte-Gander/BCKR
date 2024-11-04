// Fonction empêchant la date de fin d'événement d'être avant celle du début 
document.addEventListener('DOMContentLoaded', function() {
    const dateDebutInput = document.getElementById('evenement_dateDebut'); // Adjust ID based on field name
    const dateFinInput = document.getElementById('evenement_dateFin'); // Adjust ID based on field name

    // Listen for changes in the dateDebut input
    dateDebutInput.addEventListener('change', function() {
        const dateDebutValue = new Date(dateDebutInput.value);

        if (dateDebutValue) {
            // Set the minimum date for dateFin to the same as dateDebut
            dateFinInput.min = dateDebutValue.toISOString().slice(0, 16); // Set the min attribute for dateFin

            // If dateFin is before dateDebut, reset it
            if (new Date(dateFinInput.value) < dateDebutValue) {
                dateFinInput.value = ''; // Clear the invalid dateFin value
            }
        }
    });

    // Listen for changes in the dateFin input
    dateFinInput.addEventListener('change', function() {
        const dateFinValue = new Date(dateFinInput.value);
        const dateDebutValue = new Date(dateDebutInput.value);

        // Prevent setting dateFin to a time before dateDebut
        if (dateFinValue < dateDebutValue) {
            alert('La date de fin ne peut pas être avant la date de début!');
            dateFinInput.value = ''; // Reset dateFin to prevent invalid selection
        }
    });
});