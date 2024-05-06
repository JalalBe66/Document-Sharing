<?php

use App\Http\Controllers\ConnexionController;
use App\Http\Controllers\DeconnexionController;
use App\Http\Controllers\InscriptionController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('templates.templateF');
})->name("template");

Route::get('/home', function () {
    return view('basique.home');
})->name("home");


Route::middleware("guest")->group(function(){
    //Les routes d'inscription
    Route::get("/register", [InscriptionController::class, "show"])->name("register");
    Route::post("/register", [InscriptionController::class, "register"]) ->name("register.post");
});


Route::middleware("guest")->group(function(){
    Route::get("/login", [ConnexionController::class, "show"])->name("login");
    Route::post("/login", [ConnexionController::class, "login"])->name("login.post");
});
Route::middleware("auth")->group(function(){
    Route::post("/logout", [DeconnexionController::class, "logout"])->name("logout");
    });
    