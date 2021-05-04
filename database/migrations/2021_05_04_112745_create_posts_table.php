<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            //$table->integer('user_id')->unsigned()->index();//objava pripada useru

            //referencira tablicu user sa id stupcem,constrained FK
            //onDelete('cascade'), ako obrišemo usera, brišemo i njegove objave
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            

            $table->text('body');
            $table->timestamps();//created at, updated at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
