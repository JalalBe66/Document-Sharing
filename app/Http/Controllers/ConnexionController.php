<?php

namespace App\Http\Controllers;

use App\Models\Employe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use function PHPUnit\Framework\fileExists;

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
            return redirect()->route("Accueil")->with("success", "Authentification réussie");
        } 

        return redirect()->route("Login")->with("error", "Erreur d'authentification");
    }
    public function uppdate(Request $request, $id)
{
        $employe = Employe::findOrFail($id);
        $employe->nom = $request->nom;
        $employe->prenom = $request->prenom;
    
            
            $file = $request->file("image");
            $extention = $file->getClientOriginalExtension();
            $filename=time() . "." . $extention;
            $file->move(public_path('imgs'), $filename);
            $employe->urlProfile = "imgs/".$filename;
            $employe->save();

    // Redirige avec succès
    return redirect()->route("Profile", compact("employe"));
}

    
        

    public function destroy( $id){
        $employe=Employe::findOrFail($id);
        if(file_exists($employe->urlProfile)){
            unlink($employe->urlProfile);
            DB::table("employes")->where("id" , $id)->delete();
        }
        else{
            DB::table("employes")->where("id" , $id)->delete();
        }
        return redirect()->route("Accueil");
    }
}