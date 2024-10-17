<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Scategorie extends Model
{
    use HasFactory;
    protected $fillable = [
        "nomscategorie",
        "imagescategorie",
        "categorieID"

    ];//definir tous les attributs dans la classe scategories
    public function categorie(){
        return $this->belongsTo(Categorie::class,"categorieID"); //hethi maaneha sous categorie taht categorie (relation inverse )
    }
    public function articles(){
        return $this->hasMany(Article::class,"scategorieID");//maaneha scategories aandou barcha articlouwet 
    }
}
