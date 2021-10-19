<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LinksocialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Linksocials')->insert([
            [
                "lien"=>"https://www.facebook.com/",
                "coach_id"=>1,
                "icon_id"=>1,

            ],
            [
                "lien"=>"https://twitter.com/",
                "coach_id"=>1,
                "icon_id"=>2,

            ],
            [
                "lien"=>"https://dribbble.com/",
                "coach_id"=>1,
                "icon_id"=>3,

            ],
            [
                "lien"=>"https://www.pinterest.com/",
                "coach_id"=>1,
                "icon_id"=>4,

            ],
            [
                "lien"=>"https://www.facebook.com/",
                "coach_id"=>2,
                "icon_id"=>1,

            ],
            [
                "lien"=>"https://twitter.com/",
                "coach_id"=>2,
                "icon_id"=>2,

            ],
            [
                "lien"=>"https://dribbble.com/",
                "coach_id"=>2,
                "icon_id"=>3,

            ],
            [
                "lien"=>"https://www.pinterest.com/",
                "coach_id"=>2,
                "icon_id"=>4,

            ],
            [
                "lien"=>"https://www.facebook.com/",
                "coach_id"=>3,
                "icon_id"=>1,

            ],
            [
                "lien"=>"https://twitter.com/",
                "coach_id"=>3,
                "icon_id"=>2,

            ],
            [
                "lien"=>"https://dribbble.com/",
                "coach_id"=>3,
                "icon_id"=>3,

            ],
            [
                "lien"=>"https://www.pinterest.com/",
                "coach_id"=>3,
                "icon_id"=>4,

            ],

        ]);
    }
}
