<?php

use App\Http\Controllers\Auth\GoogleController as AuthGoogleController;
use App\Http\Controllers\Auth\LinkdinController;
use App\Http\Controllers\Auth\LinkedinController;
use App\Http\Controllers\ConnexionController;
use App\Http\Controllers\DeconnexionController;
use App\Http\Controllers\DossierController;
use App\Http\Controllers\FichierController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\InscriptionController;
use App\Models\Dossier;
use Illuminate\Support\Facades\Route;






// affichage et edite pofile

Route::get('/Profile', function () {
    return view('employer.profileE');
})->name("Profile");

Route::put("/Profile/{id}",[ConnexionController::class , "uppdate"])->name("Profile.edit");
Route::delete("/Profile/{id}",[ConnexionController::class , "destroy"])->name("Profile.delete");




//affichage edite folder

//folder
Route::get("/TousDossier{id}",[DossierController::class,"index"])->name("Dossiers");
Route::get("/NouveauDossier",function(){
    return view("employer.Dossier.creerDossier");
})->name("CreerDoc");
Route::post("/addDossier{id}",[DossierController::class,"store"])->name("addDoc");

//file
Route::get("/TousFichier{id}",[FichierController::class,"index"])->name("fichier.index");
Route::get("/NouveauFichier{id}",[FichierController::class , "create"])->name("fichier.create");
Route::get("/Download{id}",[FichierController::class , "downloadFile"])->name("fichier.download");
Route::post("/NouveauFichier/store",[FichierController::class , "store"])->name("fichier.store");
// Route::get("/NouveauDossi",function(){
//     return view("employer.creerDossier");
// })->name("Transfert");


// Route::get("/TousDossir",function(){
//     return view("employer.allDossier");
// })->name("Recue");

// Route::get("/TousDosier",function(){
//     return view("employer.allDossier");
// })->name("Envoie");




// affichage page bases

Route::get('/', function () {
    return view('basique.Accueil');
})->name("Accueil");









// login logout

Route::middleware("guest")->group(function(){
    //Les routes d'inscription
    Route::get("/register", [InscriptionController::class, "show"])->name("Register");
    Route::post("/register", [InscriptionController::class, "register"]) ->name("Register.post");
});


Route::middleware("guest")->group(function(){
    Route::get("/login", [ConnexionController::class, "show"])->name("Login");
    Route::post("/login/post", [ConnexionController::class, "login"])->name("Login.post");
});
Route::middleware("auth")->group(function(){
    Route::post("/logout", [DeconnexionController::class, "logout"])->name("Logout");
    });
    
Route::get("auth/google",[AuthGoogleController::class ,"googlePage"]);
Route::get("auth/google/callback",[AuthGoogleController::class ,"googleCallback"]);
