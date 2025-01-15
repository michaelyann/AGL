<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function inscription()
    {
        return view('inscription');
    }
    
    public function inscriptionpost(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'prénom' => 'required|string|max:255',
            'date' => 'required|date',
            'email' => 'required|email|unique:users,email',
            'password' => [
                'required',
                'string',
                'min:8',
                function ($attribute, $value, $fail) {
                    $existingPasswords = User::all()->pluck('password');
                    foreach ($existingPasswords as $hashedPassword) {
                        if (Hash::check($value, $hashedPassword)) {
                            $fail('Le mot de passe ne peut pas être identique à un mot de passe déjà utilisé.');
                        }
                    }
                },
            ],
            'pays' => 'required|string',
        ]);
    
        User::create([
            'name' => $request->name,
            'prénom' => $request->prénom,
            'date' => $request->date,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'pays' => $request->pays,
        ]);
    
        return redirect()->back()->with('success', 'Inscription réussie.');
    }


    public function connect()
    {
        return view('connexion');
    }

    public function connectPost(Request $request)
    {
        // Valider les données d'entrée
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
    
        // Préparer les informations d'identification
        $credentials = $request->only('email', 'password');
    
        // Tentative d'authentification
        if (Auth::attempt($credentials)) {
            // Rediriger vers la page d'accueil avec un message de succès
            return redirect('/Accueil')->with('success', 'Connexion réussie');
        }
    
        // Retour en arrière avec un message d'erreur
        return back()->with('error', 'Email ou mot de passe incorrect');
    }
    

    public function deconnexion()
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/connexion');
    }
}

