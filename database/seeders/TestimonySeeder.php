<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestimonySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('testimonies')->insert([
            [
                "texte"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla non mi just. Aliquam vitae purus vel odio suscipit lobortis. Donec interdum finibus egestas. In eleifend ipsum eu lacinia congue. Vestibulum sodales, sapien aliquam ",
                "signature"=>"signature.png",
                "nom"=>"Co-Founder Of Company",
            ],
            [
                "texte"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla non mi just. Aliquam vitae purus vel odio suscipit lobortis. Donec interdum finibus egestas. In eleifend ipsum eu lacinia congue. Vestibulum sodales, sapien aliquam ",
                "signature"=>"signature.png",
                "nom"=>"Co-Founder Of Company",
            ],
            [
                "texte"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla non mi just. Aliquam vitae purus vel odio suscipit lobortis. Donec interdum finibus egestas. In eleifend ipsum eu lacinia congue. Vestibulum sodales, sapien aliquam ",
                "signature"=>"signature.png",
                "nom"=>"Co-Founder Of Company",
            ],
            [
                "texte"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla non mi just. Aliquam vitae purus vel odio suscipit lobortis. Donec interdum finibus egestas. In eleifend ipsum eu lacinia congue. Vestibulum sodales, sapien aliquam ",
                "signature"=>"signature.png",
                "nom"=>"Co-Founder Of Company",
            ],
            [
                "texte"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla non mi just. Aliquam vitae purus vel odio suscipit lobortis. Donec interdum finibus egestas. In eleifend ipsum eu lacinia congue. Vestibulum sodales, sapien aliquam ",
                "signature"=>"signature.png",
                "nom"=>"Co-Founder Of Company",
            ],
        ]);
    }
}
