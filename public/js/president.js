function verifierCodePresident() {
    const code = document.getElementById('presidentCode').value;
    if (code === "ALLMIGHTY") {  // Remplacez par le code réel du président
        document.getElementById('codePromptPresident').style.display = 'none';
        document.getElementById('pageContent').style.display = 'block';

        // Charger et afficher les notes
        afficherNotes();
    } else {
        alert("Code incorrect !");
    }
}
// Fonction pour afficher les notes transmises
function afficherNotes() {
    const notes = JSON.parse(localStorage.getItem('notes')) || [];
    const notesContainer = document.getElementById('juryInfo');

    if (notes.length === 0) {
        notesContainer.innerHTML = "<p>Aucune note enregistrée pour le moment.</p>";
        return;
    }

    // Afficher la dernière note ajoutée (ou toutes les notes si besoin)
    const derniereNote = notes[notes.length - 1]; // Affiche la dernière note enregistrée
    notesContainer.innerHTML = `
        <p><strong>Nom :</strong> ${derniereNote.nom}</p>
        <p><strong>Prénom :</strong> ${derniereNote.prenom}</p>
        <p><strong>Film :</strong> ${derniereNote.film}</p>
        <p><strong>Note :</strong> ${derniereNote.note}</p>
        <p><strong>Code :</strong> ${derniereNote.code}</p>
    `;
}
