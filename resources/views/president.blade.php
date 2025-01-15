<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validation par le Président</title>
    <link rel="stylesheet" href="{{asset (css\president.css')}}">
</head>
<body>
    <header>
        <h1>Validation des Notes</h1>
    </header>
    <main>
        <section id="codePromptPresident" style="text-align: center; margin-top: 50px;">
            <h2>Accès réservé au président</h2>
            <p>Veuillez entrer le code président pour accéder à cette page.</p>
            <input type="password" id="presidentCode" placeholder="Entrez le code président">
            <button onclick="verifierCodePresident()">Valider</button>
        </section>

        <div id="pageContent" style="display: none; margin-top: 50px;">
            <section>
                <h2>Vérifiez et Validez les Informations</h2>
                <div id="juryInfo">
                    <p><strong>Nom :</strong> <span id="nomDisplay"></span></p>
                    <p><strong>Prénom :</strong> <span id="prenomDisplay"></span></p>
                    <p><strong>Film :</strong> <span id="filmDisplay"></span></p>
                    <p><strong>Note :</strong> <span id="noteDisplay"></span></p>
                    <p><strong>Code :</strong> <span id="codeDisplay"></span></p>
                </div>
                <form id="validationForm">
                    <label for="validationCode">Code de Validation :</label>
                    <input type="password" id="validationCode" placeholder="Entrez le code fourni par le jury" required>

                    <button type="submit">Valider</button>
                </form>
                <p id="validationMessage" style="margin-top: 20px; font-weight: bold;"></p>
                <button id="retourButton" style="margin-top: 20px;">RETOUR</button>
            </section>
        </div>
    </main>
<script src="{{asset('js/president.js')}}"></script>
</body>
</html>
