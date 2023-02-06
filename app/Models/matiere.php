<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class matiere extends Model
{
    use HasFactory;


    public function etudiants()
    {
        return $this->hasMany(etudiants::class);
    }
}
