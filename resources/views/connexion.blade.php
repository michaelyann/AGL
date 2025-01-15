<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Se Connecter</title>
    <link rel="stylesheet" href="{{asset('css/connexion.css')}}">
</head>
<body>
    <div class="login-container">
        <h1>Se Connecter</h1>
        <form action="{{ route('connexion.post') }}" method="POST">
            @csrf
            <label for="name">Nom</label>
            <input type="text" id="nom" name="name" placeholder="Entrez votre nom" required>
            
            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Entrez votre email" required>
            
            <label for="password">Mot de passe</label>
            <input type="password" id="password" name="password" placeholder="Entrez votre mot de passe" required>
            @if (session('error'))
                    <div class="alert-error" role="alert">{{ session('error') }}</div>
            @endif
            <div class="bouttons">
                <button type="submit">Se connecter</button>
                <button type="button" onclick="window.history.back();">Retour</button>
            </div>
        </form>
        <p>Pas encore inscrit ? <a href="{{ url('/inscription') }}">Créer un compte</a></p>
    </div>
</body>
</html>
