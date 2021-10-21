<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classes', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('nom');
            $table->json('package');
            $table->foreignId('coach_id')->constrained('coaches','id')->onDelete('cascade');
            $table->string('horaire');
            $table->foreignId('categorie_id')->constrained('categories','id')->onDelete('cascade');
            $table->boolean('prioritaire');
            $table->string('color')->nullable();
            $table->date('date');


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
        Schema::dropIfExists('classes');
    }
}
