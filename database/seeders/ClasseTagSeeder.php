<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClasseTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('pivot_classes_tags')->insert([
            [
                "classe_id"=>1,
                "tag_id"=>2,
            ],
            [
                "classe_id"=>1,
                "tag_id"=>7,
            ],
            [
                "classe_id"=>1,
                "tag_id"=>4,
            ],
            
            [
                "classe_id"=>2,
                "tag_id"=>4,
            ],
            [
                "classe_id"=>2,
                "tag_id"=>9,
            ],
            [
                "classe_id"=>3,
                "tag_id"=>8,
            ],
            [
                "classe_id"=>3,
                "tag_id"=>3,
            ],
            [
                "classe_id"=>3,
                "tag_id"=>7,
            ],
         ]);
    }
}
