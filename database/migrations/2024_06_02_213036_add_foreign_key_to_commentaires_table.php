<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('commentaires', function (Blueprint $table) {
            $table->unsignedBigInteger('recette_id');
            $table->foreign('recette_id')->references('id')->on('recettes');
        });
    }

    public function down()
    {
        Schema::table('commentaires', function (Blueprint $table) {
            $table->dropForeign(['recette_id']);
            $table->dropColumn('recette_id');
        });
    }
};
