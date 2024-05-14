<?php

namespace App\Http\Controllers;

use App\Models\Fichier;
use Illuminate\Http\Request;

class FichierController extends Controller
{
    //
    public function index($id){
        $fichiers=Fichier::with("dossier")->where("dossier","=",$id)->get();
        return view("employer.Fichier.allFichier",compact("id" , "fichiers"));
    }
    public function create($id){
        $idDossier=$id;
        return view("employer.Fichier.creerFichier",["idDossier"=>$id]);
    }
    public function store(Request $request){
        switch($request->type){
            case "PDF":
                $image="imgs/pdf.png";
                break;
            case "TXT" :
                $image="imgs/txt.png";
                break;
            case "IMG" :
                $image="imgs/png.png";
                break;
            case "MP4" :
                $image="imgs/mp4.png";
                break;
            case "Autre" :
                $image="imgs/autre.png";
                break;
            default:
                $image="imgs/autre.png";
        }
        
        $file=$request->file("url");
        $extention=$file->getClientOriginalExtension();
        $fileName=time() . "." . $extention;
        $file->move(public_path("FileFromUser"),$fileName);
        
        Fichier::create([
            "nomFile"=>$request->nom,
            "typeFile"=>$request->type,
            "urlFile"=>$fileName,
            "imageFile"=>$image,
            "propriétaire"=>auth()->user()->id,
            "dossier"=>$request->dossier,

        ]);
        


        return redirect()->route("fichier.index",$request->dossier);
    }
    public function downloadFile($id){
        $upload=Fichier::findOrFail($id);
        $filePath=public_path("FileFromUser/$upload->urlFile");
        return response()->download($filePath);

        
    }
}
