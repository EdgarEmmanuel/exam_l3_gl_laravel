<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
 

class SemestreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $semestres = [
            "semestre 1",
            "semestre 2"
        ];


        foreach($semestres as $semestre){
            $data = DB::select('select * from semestres where name = ?', [$semestre]);

            if($data == null){
                DB::table('semestres')->insert([
                    'name' => $semestre,
                ]);
            }
        }
    }
}
