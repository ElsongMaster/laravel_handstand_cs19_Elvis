<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLinksocialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('linksocials', function (Blueprint $table) {
            $table->id();
            $table->string('lien');
            $table->string('coach_id')->constrained('coachs','id');
            $table->foreignId('icon_id')->constrained('icons','id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('linksocials');
    }
}
