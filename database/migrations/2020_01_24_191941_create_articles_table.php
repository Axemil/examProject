<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('description_short')->nutlable();
            $table->text('description');
            $table->string('image')->nutlable();
            $table->boolean('image_show')->nutlable();
            $table->string('meta_title')->nutlable();
            $table->string('meta_description')->nutlable();
            $table->string('meta_keyword')->nutlable();
            $table->boolean('published');
            $table->integer('viewed')->nutlable();
            $table->integer('created_by')->nutlable();
            $table->integer('modified_by')->nutlable();
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
        Schema::dropIfExists('articles');
    }
}
