<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sliders')->insert([
            [
                "image"=>"slider1.jpg",
                "titre"=>"Welcome Our Handstand",
                "soustitre"=>"Keep Your Body",
                "span"=>"Refresh & Strong",
                "texte"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer auctor pharetra iss neque. Nullam cursus elit sit amet justo interdum facilisis id at tortor.",
                "btn"=>"read more",
                "selected"=>true,
            ],
            [
                "image"=>"slider2.jpg",
                "titre"=>"Welcome Our Handstand",
                "soustitre"=>"Keep Your Body",
                "span"=>"Refresh & Strong",
                "texte"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer auctor pharetra iss neque. Nullam cursus elit sit amet justo interdum facilisis id at tortor.",
                "btn"=>"read more",
                "selected"=>false,

            ],
        ]);
    }
}
