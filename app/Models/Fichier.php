<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fichier extends Model
{
    use HasFactory;

    protected $fillable=[
        "nomFile",
        "typeFile",
        "urlFile",
        "dossier",
        "imageFile",
        "propriétaire"
    ];

    public function employe(){
        return $this->belongsTo(Employe::class,"propriétaire");
    }
    public function dossier(){
        return $this->belongsTo(Dossier::class , "dossier");
    }
}
