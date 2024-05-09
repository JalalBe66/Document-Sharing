<?php

use App\Http\Controllers\Auth\GoogleController as AuthGoogleController;
use App\Http\Controllers\Auth\LinkdinController;
use App\Http\Controllers\Auth\LinkedinController;
use App\Http\Controllers\ConnexionController;
use App\Http\Controllers\DeconnexionController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\InscriptionController;
use Illuminate\Support\Facades\Route;

Route::get('/Profile', function () {
    return view('employer.profileE');
})->name("Profile");

Route::put("/Profile/{id}",[ConnexionController::class , "uppdate"])->name("Profile.edit");
Route::delete("/Profile/{id}",[ConnexionController::class , "destroy"])->name("Profile.delete");

Route::get('/Accueil', function () {
    return view('basique.Accueil');
})->name("Accueil");

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
