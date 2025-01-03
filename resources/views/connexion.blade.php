<!DOCTYPE html>
<html>
<head>
    <title>Slide Navbar</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('connexion.css') }}">
</head>
<body>
    <div class="main">  	
        <input type="checkbox" id="chk" aria-hidden="true">

        <div class="signup">
            <form action="{{ route('inscription.post') }}" method="POST">
                @csrf
                <div class="signup-form">
                    <label for="chk" aria-hidden="true">S'inscrire</label>
                    <input type="text" name="name" placeholder="Nom" required="">
                    <input type="text" name="prénom" placeholder="Prénom" required="">
                    <input type="date" name="date" placeholder="Date de naissance" required>
                    <input type="email" name="email" placeholder="Email" required="">
                    <input type="password" name="password" placeholder="Password" required="">
                    @if (session('success'))
                        <div class="alert-success" role="alert">{{ session('success') }}</div>
                    @endif
                    <button>S'inscrire</button>
                </div>
            </form>
        </div>
        <div class="login">
            <form action="{{ route('connexion.post') }}" method="POST">
                @csrf
                <label for="chk" aria-hidden="true">se connecter</label>
                <input type="email" name="mail" placeholder="Email" required="">
                <input type="password" name="pswd" placeholder="Password" required="">
                @if (session('error'))
                    <div class="alert-error" role="alert">{{ session('error') }}</div>
                @endif
                <button>Connexion</button>
            </form>
        </div>

    
</body>
</html>
