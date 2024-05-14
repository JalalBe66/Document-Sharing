<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dossier extends Model
{
    use HasFactory;
    protected $fillable=[
        "nomDoc",
        "descDoc",
        "propriétaire"
    ];

    public function employe(){
        return $this->belongsTo(Employe::class,"propriétaire");
    }
    public function employes(){
        return $this->belongsToMany(Employe::class);
    }
    public function fichier(){
        return $this->hasMany(Fichier::class,"dossier");
    }
}
