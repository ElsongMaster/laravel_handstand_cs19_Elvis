<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmailsendedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emailsendeds', function (Blueprint $table) {
            $table->id();
            $table->string('object');
            $table->string('typemail');
            // $table->string('image');
            // $table->string('nom');
            // $table->string('horaire');
            // $table->string('categorie');
            // $table->string('effectif');
            // $table->string('date_cours');
            $table->foreignId('classe_id')->constrained('classes','id');
            $table->foreignId('user_id')->nullable()->constrained('users','id');
            $table->boolean('lu');
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
        Schema::dropIfExists('emailsendeds');
    }
}
