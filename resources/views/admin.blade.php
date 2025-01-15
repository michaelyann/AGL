<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrateur</title>
    <link rel="stylesheet" href="{{asset('css\admin.css')}}">
</head>
<body>
    <header>
        <h1>Accès Administrateur</h1>
    </header>

    <main id="mainContent">
        <section id="codePrompt" style="text-align: center; margin-top: 50px;">
            <h2>Veuillez entrer le code d'accès administrateur :</h2>
            <input type="password" id="adminCode" placeholder="Entrez le code">
            <button onclick="verifierCode()">Valider</button>
            <p id="errorMessage" style="color: red; display: none;">Code incorrect. Essayez à nouveau.</p>
        </section>

        <section id="adminSection" style="display: none; margin-top: 50px; text-align: center;">
            <button onclick="window.location.href='gestionplanning.html'">Gérer le Planning</button>
            <button onclick="window.location.href='gestionutilisateur.html'">Gérer les Utilisateurs</button>
        </section>
    </main>
<script src="{{asset('js/admi.js')}}"></script>
</body>
</html>
