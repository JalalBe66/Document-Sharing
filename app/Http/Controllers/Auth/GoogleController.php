<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\Employe;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class GoogleController extends Controller
{
    
    public function googlePage()
    {
        return Socialite::driver('google')->redirect();
    }

    
    public function googleCallback()
    {
        
            $user = Socialite::driver('google')->user();

        // Vérifie si l'utilisateur existe déjà dans la base de données
        $existingUser = Employe::where('email', $user->email)->first();

        if ($existingUser) {
            // Connecte l'utilisateur existant
            Auth::login($existingUser);
        } else {
            // Crée un nouvel utilisateur s'il n'existe pas encore dans la base de données
            $newUser = new Employe();
            $newUser->nom = $user->user["family_name"];
            $newUser->prenom = $user->user['given_name'];
            $newUser->email = $user->email;
            $newUser->password = Hash::make($user->password);
            $newUser->urlProfile = $user->avatar;
            // Ajoute d'autres champs nécessaires
            $newUser->save();

            // Connecte le nouvel utilisateur
            Auth::login($newUser);
        }

        // Redirige l'utilisateur après la connexion
        return redirect()->route("Accueil");
    }
}