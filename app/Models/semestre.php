<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class semestre extends Model
{
    use HasFactory;

    public function students()
    {
        return $this->hasMany(etudiants::class);
    }
}
