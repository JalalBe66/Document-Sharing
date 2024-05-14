<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('fichiers', function (Blueprint $table) {
            $table->id();
            $table->string("nomFile",40)->nullable()->default("Sans Name");
            $table->enum("typeFile",["PDF","MP4","IMG","TXT","Autre"]);
            $table->text("urlFile");
            $table->string("imageFile");
            $table->integer("Propriétaire");
            $table->integer("dossier");
            $table->foreign("propriétaire")->references("id")->on("employes")->onDelete("cascade")->onUpdate("cascade");
            $table->foreign("dossier")->references("id")->on("dossiers")->onDelete("cascade")->onUpdate("cascade");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fichiers');
    }
};
