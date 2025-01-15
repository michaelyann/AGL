<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des Notes - Jury</title>
    <link rel="stylesheet" href="{{asset (css\Note.css')}}">
</head>
<body>
    <header>
        <h1>Gestion des Notes - Jury</h1>
    </header>
    <main>
        <section id="codePrompt" style="text-align: center; margin-top: 50px;">
            <h2>Accès réservé aux membres du jury</h2>
            <p>Veuillez entrer votre code jury pour continuer.</p>
            <input type="text" id="jury-code" placeholder="Entrez votre code jury">
            <button onclick="verifierCode()">Valider</button>
        </section>

        <section id="jurySection" style="display: none; margin-top: 50px;">
            <h2>Saisir les Informations</h2>
            <form id="juryForm">
                <label for="nom">Nom</label>
                <input type="text" id="nom" name="nom" placeholder="Entrez votre nom ">
        
                <label for="prenom">Prenom</label>
                <input type="text" id="prenom" name="prenom" placeholder="Entrez votre prenom">
                
                <label for="film">Nom du film :</label>
                <input type="text" id="film" name="film" placeholder="Entrez le nom du film" required>
        
                <label for="note">Note (1 à 20) :</label>
                <input type="number" id="note" name="note" min="1" max="20" required>
        
                <button type="submit">VALIDER</button>
            </form>
            <button id="retourButton" style="margin-top: 20px;">RETOUR</button>
        </section>
    </main>
    <script src="{{asset('js/Note.js')}}"></script>
</body>
</html>
