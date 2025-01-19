
document.getElementById('reservationForm').addEventListener('submit', function(e) {
    e.preventDefault();

    // Réinitialiser les messages d'erreur avant une nouvelle soumission
    document.querySelectorAll('.invalid-feedback').forEach(el => el.textContent = '');
    document.querySelectorAll('.is-invalid').forEach(el => el.classList.remove('is-invalid'));
        
    // Masquer la légende d'erreur au début
    const errorLegend = document.getElementById('errorLegend');
    errorLegend.classList.add('d-none');
    // Récupération des données du formulaire
    const formData = Object.fromEntries(new FormData(this));

    fetch('{{ route("reservations.store") }}', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        },
        body: JSON.stringify(formData)
    })
    .then(response => {
        if (response.ok) {
            return response.json();
        } else {
            return response.json().then(errors => { throw errors; });
        }
    })
    .then(data => {
        if (data.success) {
            toastr.success('Chambre réservée avec succès!');
            $('#reservationModal').modal('hide');
            this.reset();
        }
    })
    .catch(errors => {
        if (errors.errors) {
            // Gestion des erreurs de validation
            Object.keys(errors.errors).forEach(key => {
                const field = document.querySelector(`[name="${key}"]`);
                if (field) {
                    // Ajouter la classe `is-invalid`
                    field.classList.add('is-invalid');

                    // Ajouter le message d'erreur sous le champ
                    const feedback = field.nextElementSibling;
                    if (feedback && feedback.classList.contains('invalid-feedback')) {
                        feedback.textContent = errors.errors[key][0];
                    }
                }
            });
        } else {
            // Afficher une alerte générique en cas d'erreur serveur
            toastr.error('Erreur lors de la réservation.');
        }
          // Afficher la légende en cas d’erreur
          errorLegend.classList.remove('d-none');
    });
});