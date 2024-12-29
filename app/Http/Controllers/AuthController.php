<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    
    public function inscriptionPost(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password); // Correct Hash::make
        $user->save();
        
        return back()->with('success', 'Inscription réussie');
    }

    public function connect()
    {
        return view('connexion');
    }

    public function connectPost(Request $request)
    {
        $credentials = $request->only('mail', 'pswd');
        if (Auth::attempt(['email' => $credentials['mail'], 'password' => $credentials['pswd']])) {
            return redirect('/home')->with('success', 'Connexion réussie');
        }
        return back()->with('error', 'Email ou mot de passe incorrect');
    }
}

