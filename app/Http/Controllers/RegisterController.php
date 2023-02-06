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
        //dd($request->all());

        $etudiant = new etudiants();
        $etudiant->name = $request->nom ;
        $etudiant->surname = $request->prenom ;
        $etudiant->phone_number = $request->phone_number ;
        $etudiant->note_one = $request->note_one ;
        $etudiant->exam_note = $request->exam_note ;
        $etudiant->matiere_id = $request->matiere_id ;
        $etudiant->semestre_id = $request->semestre_id ;

        $etudiant->save();


        return redirect("/register")->with("status", "Enregistrement de L'etudiant Effectuee ");
    }


}
