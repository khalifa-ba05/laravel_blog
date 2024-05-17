<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    protected $fillable = 
    [
        'intitule'
    ];

    public function User()
    {
        return $this->hasMany(User::class, 'id_role');//Cette methode renvoie la valeur de la clé "trangère id_rôle
    }
}
