function verifierCode() {
    const codeInput = document.getElementById("jury-code").value.trim();
    const codesValides = ["Gnazalé25", "Dizo25", "Coulibaly25"];

    if (codesValides.includes(codeInput)) {
        document.getElementById("codePrompt").style.display = "none";
        document.getElementById("jurySection").style.display = "block";
    } else {
        alert("Code jury invalide. Veuillez réessayer.");
    }
}
// Fonction pour générer un code unique
function genererCode() {
    return Math.random().toString(36).substring(2, 8).toUpperCase(); // Ex: "X8VFR9"
}

// Fonction pour gérer l'enregistrement des données du formulaire
document.getElementById('juryForm').addEventListener('submit', function(event) {
    event.preventDefault();

    // Récupérer les valeurs du formulaire
    const nom = document.getElementById('nom').value;
    const prenom = document.getElementById('prenom').value;
    const film = document.getElementById('film').value;
    const note = document.getElementById('note').value;
    const code = genererCode(); // Générer un code unique

    // Vérifier que tous les champs sont remplis
    if (!nom || !prenom || !film || !note) {
        alert("Veuillez remplir tous les champs.");
        return;
    }

    // Créer un objet contenant les données
    const noteData = { nom, prenom, film, note, code };

    // Sauvegarder les données dans localStorage
    let notes = JSON.parse(localStorage.getItem('notes')) || [];
    notes.push(noteData);
    localStorage.setItem('notes', JSON.stringify(notes));

    // Confirmation
    alert(`Les données ont été enregistrées avec succès !\nCode : ${code}`);

    // Réinitialisation du formulaire
    document.getElementById('juryForm').reset();
});

// Fonction pour gérer le bouton "Retour"
document.getElementById('retourButton').addEventListener('click', function() {
    // Masquer la section des notes et afficher la section du code jury
    document.getElementById('jurySection').style.display = 'none';
    document.getElementById('codePrompt').style.display = 'block';
});
