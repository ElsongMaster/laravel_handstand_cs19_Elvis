<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClasseUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pivot_classe_user')->insert([
            [
                "classe_id"=>1,
                "user_id"=>4,
            ],
        ]);
    }
}
