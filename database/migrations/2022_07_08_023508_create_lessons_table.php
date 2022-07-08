<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLessonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lessons', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('chapter_id')->nullable()->unsigned();
            $table->string('slug', 191)->nullable();
            $table->string('title', 191)->nullable();
            $table->text('thumbnail');
            $table->text('description');
            $table->text('download_files');
            $table->enum('video_type', ['youtube', 'upload'])->nullable();
            $table->text('video_path');
            $table->enum('publish', ['publish', 'non'])->nullable();
            $table->timestamps();
            $table->foreign('chapter_id')->references('id')->on('chapters')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lessons');
    }
}
