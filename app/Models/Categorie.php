<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    use HasFactory;
    protected $fillable = 
    [
        'intitule'
    ];

    public function Blog()
    {
        return $this->hasMany(Categorie::class, 'id_categorie');//Cette methode renvoie la valeur de la clé "trangère id_catégorie
    }
}
