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
        Schema::create('commentaires', function (Blueprint $table) {
            $table->id();
            $table->string('nom_auteur', 100);
            $table->text('contenu');
            $table->timestamps();
            $table->unsignedBigInteger('recette_id')->after('contenu');
            $table->foreign('recette_id')->references('id')->on('recettes');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('commentaires', function (Blueprint $table) {
            $table->dropForeign('commentaires_recette_id_foreign');
            $table->dropColumn('recette_id');
        });
        Schema::dropIfExists('commentaires');
    }
};
