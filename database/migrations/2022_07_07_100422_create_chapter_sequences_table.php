<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChapterSequencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chapter_sequences', function (Blueprint $table) {
            $table->id();
            $table->string('model_type', 191)->nullable();
            $table->bigInteger('model_id')->nullable()->unsigned();
            $table->bigInteger('course_id')->nullable()->unsigned();
            $table->integer('sequence')->nullable();
            $table->timestamps();
            $table->foreign('course_id')->references('id')->on('courses')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chapter_sequences');
    }
}
