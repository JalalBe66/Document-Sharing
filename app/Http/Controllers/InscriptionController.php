<?php

namespace App\Http\Controllers;

use App\Models\Employe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class InscriptionController extends Controller
{
    public function show()
    {
        return view('connection.register');
    }

    public function register(Request $request)
    {
        $employe=Employe::create([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'email' => $request->email,
            'password' =>Hash::make($request->password),
        ]);
        auth()->login($employe);
        return redirect()->route("Accueil");
    }
}