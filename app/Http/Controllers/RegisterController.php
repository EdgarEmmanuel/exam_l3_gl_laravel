<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\matiere;
use  App\Models\semestre;
use App\Models\etudiants;


class RegisterController extends Controller
{
    public function show()
    {
        $matieres = matiere::all();
        $semestres = semestre::all() ;


        return view('pages.register', [
            'matieres' => $matieres,
            'semestres' => $semestres
        ]);
    }



    public function register_form_process(Request $request){
        dd($request->all());
    }


}
