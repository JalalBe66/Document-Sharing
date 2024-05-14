<?php

namespace App\Http\Controllers;

use App\Http\Requests\DossierRequest;
use App\Models\Dossier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DossierController extends Controller
{
    //
    public function index($id){
        $dossiers=Dossier::with("employe")->where("propriétaire","=",$id)->get();
        return view("employer.Dossier.allDossier",compact("dossiers"));
    }
    public function store(DossierRequest $request ) {
        Dossier::create([
            "nomDoc"=>$request->nomDoc,
            "descDoc"=>$request->descDoc,
            "propriétaire"=>$request->propriétaire
        ]);
        return redirect()->route("Dossiers",auth()->user()->id);
    }
}
