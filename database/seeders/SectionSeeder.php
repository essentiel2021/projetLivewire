<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    
        DB::table("sections")->insert([
            "name" => "Section1",
            "class_id" => 1
        ]);
        DB::table("sections")->insert([
            "name" => "Section2",
            "class_id" => 1
        ]);

        DB::table("sections")->insert([
            "name" => "Section3",
            "class_id" => 2
        ]);
        DB::table("sections")->insert([
            "name" => "Section4",
            "class_id" => 2
        ]);
    }
}
