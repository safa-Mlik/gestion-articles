<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void //cette fonction pour 
    {
        Schema::create('scategories', function (Blueprint $table) {//creer une table scategories
            $table->id();
            $table->string ('nomscategorie')->unique();
            $table->string('imagescategorie')->nullable();
            $table->unsignedBigInteger("categorieID")//creer un cle étrangère
            ->foreign("categorieID")
            ->references("id")//hethi bech naamlou relation bin classe categorie avec son id 
            ->on("categories")//le nom du classe eli bech njibo meni id
            ->onDelete("restrict");//manjmouch nefskhou categorie baad masret relation 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void //hethi methode tefsakhlek ken fama table scategories 9dima o thot eli snaatha fel up
    {
        Schema::dropIfExists('scategories');
    }
};
