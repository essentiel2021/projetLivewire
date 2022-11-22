<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClasseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("classes")->insert([
            ["name" => "Classe1"]
        ]);
        DB::table("classes")->insert([
            ["name" => "Classe2"]
        ]);
    }
}
