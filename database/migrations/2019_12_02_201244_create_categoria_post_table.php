<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriaPostTable extends Migration
{
    /**
     *  PIVOT TABLE
     *
     * @return void
     */
    public function up() {

        Schema::create('categoria_post', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('post_id')->unsigned();
            $table->integer('categoria_id')->unsigned();

            $table->foreign('post_id')->references('id')->on('posts')->onDelete('cascade');
            $table->foreign('categoria_id')->references('id')->on('categorias')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {

        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('categoria_post');
        Schema::enableForeignKeyConstraints();
    }
}
