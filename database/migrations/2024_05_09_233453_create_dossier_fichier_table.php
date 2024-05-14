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
        Schema::create('dossier_employe', function (Blueprint $table) {
            $table->foreignId("employe_id")->constrained()->onUpdate("cascade")->onDelete("cascade");
            $table->foreignId("dossier_id")->constrained()->onUpdate("cascade")->onDelete("cascade");
            $table->timestamps();
            $table->primary(["employe_id","dossier_id"]);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dossier_fichier');
    }
};
