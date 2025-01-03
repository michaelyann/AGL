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
        return view('connexion');
    }
    
    public function inscriptionPost(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->prénom = $request->prénom;
        $user->date = $request->date;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        
        return back()->with('success', 'Inscription réussie.Vous pouvez maintenant  vous connecter.');
    }

    public function connect()
    {
        return view('connexion');
    }

    public function connectPost(Request $request)
    {
        $credetials = [
            'email' => $request->mail,
            'password' => $request->pswd,
        ];
 
        if (Auth::attempt($credetials)) {
            return redirect('/Acceuil')->with('success', 'connexion réussie');
        }
        
        return back()->with('error', 'Email ou mot de passe incorrect');
    }

    public function deconnexion()
    {
        Auth::logout();
        return redirect('/connexion');
    }
}

