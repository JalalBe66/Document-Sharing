<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ConnexionController extends Controller
{
    public function show()
    {
        return view('connection.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            // Authentication succeeded
            return redirect()->route("home")->with("success", "Authentification réussie");
        } 

        return redirect()->route("login")->with("error", "Erreur d'authentification");
    }
}