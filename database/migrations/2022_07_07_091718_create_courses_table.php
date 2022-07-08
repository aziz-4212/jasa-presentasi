<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('category_id')->nullable()->unsigned();
            $table->string('slug', 191)->unique();
            $table->string('title', 191);
            $table->text('description');
            $table->integer('price');
            $table->integer('strike_price');
            $table->text('thumbnail');
            $table->enum('publish', ['publish', 'non'])->nullable();
            $table->string('meta_title', 191);
            $table->string('meta_description', 191);
            $table->string('meta_keyword', 191);
            $table->timestamps();

            $table->foreign('category_id')->references('id')->on('master_categories')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses');
    }
}
