<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePivotClasseUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pivot_classe_user', function (Blueprint $table) {
            $table->id();
            $table->foreignId('classe_id')->constrained('classes','id')->onDelete('cascade');
            $table->foreignId('user_id')->constrained('users','id')->onDelete('cascade');
            $table->timestamps();
            $table->dropForeign(['classe_id']);
            $table->dropForeign(['user_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pivot_classe_user');
    }
}
