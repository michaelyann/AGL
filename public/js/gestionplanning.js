const form = document.getElementById('planningForm');
const filmsList = document.getElementById('filmsList');

// Récupérer les films enregistrés dans le localStorage au chargement de la page
document.addEventListener('DOMContentLoaded', function() {
    displayFilms();
});

form.addEventListener('submit', function(event) {
    event.preventDefault();

    const filmDuration = document.getElementById('film-duration').value;
    const filmDescription = document.getElementById('film-description').value;
    const filmTitle = document.getElementById('filmTitle').value;
    const projectionDate = document.getElementById('projectionDate').value;
    const projectionTime = document.getElementById('projectionTime').value;
    const location = document.getElementById('location').value;

    const film = {
        duration: filmDuration,
        description: filmDescription,
        title: filmTitle,
        date: projectionDate,
        time: projectionTime,
        location: location
    };

    // Ajouter le film au localStorage
    let films = JSON.parse(localStorage.getItem('films')) || [];
    films.push(film);
    localStorage.setItem('films', JSON.stringify(films));

    // Afficher un message de confirmation et réinitialiser le formulaire
    alert(`Film ajouté au planning : \nTitre : ${filmTitle}\nDurée : ${filmDuration}\nDescription : ${filmDescription}\nDate : ${projectionDate}\nHeure : ${projectionTime}\nLieu : ${location}`);
    form.reset();

    // Afficher les films mis à jour
    displayFilms();
});

// Fonction pour afficher les films enregistrés en temps réel
function displayFilms() {
    const films = JSON.parse(localStorage.getItem('films')) || [];
    filmsList.innerHTML = ''; // Effacer la liste avant d'ajouter

    if (films.length === 0) {
        filmsList.innerHTML = '<p>Aucun film planifié.</p>';
    } else {
        films.forEach(film => {
            const filmElement = document.createElement('div');
            filmElement.classList.add('film');
            filmElement.innerHTML = `
                <p><strong>Titre :</strong> ${film.title}</p>
                <p><strong>Durée :</strong> ${film.duration}</p>
                <p><strong>Description :</strong> ${film.description}</p>
                <p><strong>Date :</strong> ${film.date}</p>
                <p><strong>Heure :</strong> ${film.time}</p>
                <p><strong>Lieu :</strong> ${film.location}</p>
                <hr>
            `;
            filmsList.appendChild(filmElement);
        });
    }
}
