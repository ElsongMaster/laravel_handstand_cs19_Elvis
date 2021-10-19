<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePivotClassesTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pivot_classes_tags', function (Blueprint $table) {
            $table->id();
            
            $table->foreignId('classe_id')->nullable()->constrained('classes','id');
            $table->foreignId('tag_id')->nullable()->constrained('tags','id');
            $table->timestamps();
            $table->dropForeign(['tag_id']);
            $table->dropForeign(['classe_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pivot_classes_tags');
    }
}