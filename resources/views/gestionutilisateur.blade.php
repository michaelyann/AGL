<!DOCTYPE html>  
<html lang="fr">  
<head>  
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title>Gestion des Utilisateurs</title>  
    <link rel="stylesheet" href="{{asset (css\gestionutilisateur.css')}}">  
</head>  
<body>  

    <div class="container">  
        <h1>Gestion des Utilisateurs</h1>  
        
        <div class="form-container">  
            <input type="text" id="user-id" placeholder="ID de l'utilisateur" required>  
            <input type="text" id="user-name" placeholder="Nom de l'utilisateur" required>  
            <select id="user-role">  
                <option value="">Sélectionnez le rôle</option>  
                <option value="Inspecteur">Inspecteur</option>  
                <option value="Production">Production</option>  
                <option value="Jury">Jury</option>  
            </select>  
            <button onclick="addUser()">Ajouter Utilisateur</button>  
            <button type="button" onclick="window.history.back();">Retour</button>
        </div>  
        
        <div class="user-list">  
            <h2>Liste des Utilisateurs</h2>  
            <ul id="user-list"></ul>  
        </div>  
    </div>  

    <script src="{{asset('js/gestionutilisateur.js')}}"></script>  
</body>  
</html>