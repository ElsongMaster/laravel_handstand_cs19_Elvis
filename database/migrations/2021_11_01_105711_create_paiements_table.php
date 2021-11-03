<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaiementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paiements', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users','id');
            $table->foreignId('package_id')->constrained('packages','id');
            $table->string('emailAdress');
            $table->string('cardname');
            $table->string('cardnumber');
            $table->string('cardvalidity');
            $table->string('cardsecuritycode');
            $table->string('country');
            $table->string('zipcode');
            $table->string('adress');
            $table->string('numtva')->nullable();
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
        Schema::dropIfExists('paiements');
    }
}
