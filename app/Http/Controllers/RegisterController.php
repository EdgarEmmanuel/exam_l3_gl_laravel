<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function show()
    {
        $matieres = [];
        $semestres = [] ;


        return view('pages.register', [
            'matieres' => $matieres,
            'semetres' => $semestres
        ]);
    }
}
