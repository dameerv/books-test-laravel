<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class BooksTableCreate extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function(Blueprint $table){
            $table->increments('id');
            $table->string('title');
            $table->unsignedBigInteger('author_id')->constrained();
            $table->string('description');
            $table->dateTime('updated_at');
            $table->dateTime('created_at');
//            $table->foreign('author_id')->references('id')->on('authors');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
}
