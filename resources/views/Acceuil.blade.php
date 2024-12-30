<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Films & Séries</title>
    <link rel="stylesheet" type="text/css" href="Accueil.css">
</head>
<body>
    <header class="header">
        <div class="logo">
            <h1>Doc à Tunis</h1>
        </div>
        <nav class="navigation">
            <ul>
                <li><a href="gestiondesnote.html">Membres du jury</a></li>
                <li><a href="presidentjury.html">Gestion des Notes</a></li>
                <li><a href="gestionplanning.html">Plannings</a></li>
                <li><a href="utilisateur.html">Administrateur et Utilisateur</a></li>
            </ul>
            <div>
                <form action="{{ route('deconnexion') }}" method="POST" class="d-flex" role="search">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Déconnection</button>
                </form>
            </div>
        </nav>
    </header>

    <main>
        <div class="container">
            <h1>Bienvenue, {{ Auth::user()->name }}</h1>
        </div>

        <section class="hero-section">
            <h2>Films</h2>
            <p>Notre sélection</p>
            <div class="carousel">
                <div class="carousel-track">
                    <div class="carousel-item"><img src="1.jpg" alt="Film 1"></div>
                    <div class="carousel-item"><img src="5.jpg" alt="Film 2"></div>
                    <div class="carousel-item"><img src="3.jpg" alt="Film 3"></div>
                    <div class="carousel-item"><img src="4.jpg" alt="Film 4"></div>
                    <div class="carousel-item"><img src="téléchargement.jpg" alt="Film 5"></div>
                </div>
                <button class="carousel-btn left">❮</button>
                <button class="carousel-btn right">❯</button>
            </div>
        </section>

        <section class="categories">
            <h3>Catégories</h3>
            <div class="category-grid">
                <div class="category-item">
                    <img src="1.jpg" alt="Catégorie 1">
                    <p>Comédie</p>
                </div>
                <div class="category-item">
                    <img src="4.jpg" alt="Catégorie 2">
                    <p>Action</p>
                </div>
                <div class="category-item">
                    <img src="3.jpg" alt="Catégorie 3">
                    <p>Drame</p>
                </div>
                <div class="category-item">
                    <img src="5.jpg" alt="Catégorie 4">
                    <p>Science-fiction</p>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 Film Festival - Tous droits réservés</p>
    </footer>

    
</body>
</html>
