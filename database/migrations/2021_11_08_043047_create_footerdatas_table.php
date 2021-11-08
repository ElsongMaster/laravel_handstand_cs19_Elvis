<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFooterdatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('footerdatas', function (Blueprint $table) {
            $table->id();
            $table->string('logo');
            $table->string('titre1');
            $table->string('titre2');
            $table->string('description');
            $table->string('email');
            $table->string('tel');
            $table->json('copyright');
            $table->foreignId('map_id')->constrained('maps','id')->onDelete('cascade');
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
        Schema::dropIfExists('footerdatas');
    }
}
