<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class etudiants extends Model
{
    use HasFactory;


    public function semestre()
    {
        return $this->belongsTo(semestre::class);
    }


    public function matiere()
    {
        return $this->belongsTo(matiere::class);
    }



}
