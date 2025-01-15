<!DOCTYPE html>  
<html lang="fr">  
<head>  
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title>Gestion du Planning</title>  
    <link rel="stylesheet" href="{{asset (css\gestionplanning.css')}}">  
</head>  
<body>  
    <header>  
        <h1>Gestion du Planning</h1>  
    </header>  

    <main>  
        <form id="planningForm" class="form-container">  

            <label for="film-duration">Durée (HH:mm) :</label>  
            <input type="time" id="film-duration" required>  

            <label for="filmTitle">Titre du Film :</label>  
            <input type="text" id="filmTitle" name="filmTitle" required>  

            <label for="projectionDate">Date de Projection :</label>  
            <input type="date" id="projectionDate" name="projectionDate" required>  

            <label for="projectionTime">Heure de Projection :</label>  
            <input type="time" id="projectionTime" name="projectionTime" required>  

            <label for="location">Lieu (Salle de Cinéma) :</label>  
            <input type="text" id="location" name="location" required>  

            <label for="film-description">Description :</label>  
            <textarea id="film-description" placeholder="Brève description" required></textarea>  

            <button type="submit">Ajouter au Planning</button>  
            <button type="button" onclick="window.history.back();">Retour</button>  

        </form>  
    </main>  

    <script src="{{asset('js/gestionplanning.js')}}"></script>  
</body>  
</html>