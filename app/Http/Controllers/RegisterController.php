<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\matiere;
use  App\Models\semestre;
use App\Models\etudiants;
use Illuminate\Support\Facades\DB;


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



    /**
     * display the list of registered data
     *
     * @return void
     */
    public function showList()
    {
        $etudiants = etudiants::with("semestre")-> with("matiere") ->get();


        return view('pages.list')->with([
            'etudiants' => $etudiants,
        ]);
    }





    /**
     * Show the statistics of the class
     *
     * @return void
     */
    public function showStats(){

        $etudiant = DB::select('select surname , name, ((AVG(exam_note) + AVG(note_one)) / 2 ) as moyenne from etudiants group by name, surname order by moyenne desc limit 1');

        //dd($etudiant[0]->name);
        return view("pages.stats")->with(["etudiant" => $etudiant[0]]);
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
