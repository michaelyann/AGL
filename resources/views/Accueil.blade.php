<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <link rel="stylesheet" href="{{asset('css/Accueil.css')}}">
</head>
<body>
    <header>
        <h1>DOC A TUNIS</h1>
        <nav>
            <ul>
                <li><a href="{{ url('/Note') }}">Membres du Jury</a></li>
                <li><a href="{{ url('/planning') }}">Planning</a></li>
                <li><a href="{{ url('/president') }}">President du Jury</a></li>
            </ul>
        </nav>
        <div class="user-actions">
            <form action="{{route('deconnexion')}}" method="POST">
                @csrf
                @method('DELETE')
                <button class="btn"><a href="{{ url('/connexion') }}">Déconnexion</a></button>
            </form>
            <li class="Global">
                <a href="{{asset('/admin')}}">
                    <img src="{{asset('image/Global admin icon color outline vector.jpeg')}}" alt="Administrateur">
                </a>
            </li>
        </div>
    </header>
    <div class="container">
        <h1 class="user">
            Bienvenue sur le site de <em>Doc à Tunis</em>, {{ Auth::user()->name }}
        </h1>
    </div>
    <section class="lumiere">
        <div class="img">
            <img src="{{asset('image/img.jpg')}}" alt="image principale">
        </div>
    </section>
    <section class="slider-container">
        <div class="slider-track">
            <div class="slide">
                <img src="{{ asset('image/image 1.jpeg')}}" alt="image 1">
            </div>
            <div class="slide">
                <img src="{{ asset('image/image 2.jpeg')}}" alt="image 2">
            </div>
            <div class="slide">
                <img src="{{ asset('image/image 3.jpeg')}}" alt="image 3">
            </div>
            <div class="slide">
                <img src="{{ asset('image/image 4.jpeg')}}" alt="image 4">
            </div>
            <div class="slide">
                <img src="{{ asset('image/image 5.jpeg')}}" alt="image 5">
            </div>
            <div class="slide">
                <img src="{{ asset('image/image 6.jpeg')}}" alt="image 6">
            </div>
            <div class="slide">
                <img src="{{ asset('image/images 7.jpeg')}}" alt="image 7">
            </div>
            <div class="slide">
                <img src="{{ asset('image/images 8.jpeg')}}" alt="image 8">
            </div>
            <div class="slide">
                <img src="{{ asset('image/images 9.jpeg')}}" alt="image 9">
            </div>
        </div>
    </section>
    <footer>
        <p>&copy; 2025 Film Festival - Tous droits réservés</p>
    </footer>
</body>
<script src="{{asset('js/Accueil.js')}}"></script>
</html>
