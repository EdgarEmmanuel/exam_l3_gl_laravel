<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MatieresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $matieres = [
            "laravel",
            "linux",
            "oracle",
            "java",
            "c#",
            "IOT(internet of things)",
        ];


        foreach($matieres as $matiere){
            $data = DB::select('select * from matieres where name = ?', [$matiere]);

            if($data == null){
                DB::table('matieres')->insert([
                    'name' => $matiere,
                ]);
            }
        }
    }
}
