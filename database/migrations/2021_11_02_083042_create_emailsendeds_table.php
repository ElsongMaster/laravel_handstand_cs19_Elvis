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
            $table->string('destinataire');
            $table->foreignId('classe_id')->nullable()->constrained('classes','id');
            $table->foreignId('user_id')->nullable()->constrained('users','id');
            $table->boolean('lu');
            $table->json('texte')->nullable();
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
