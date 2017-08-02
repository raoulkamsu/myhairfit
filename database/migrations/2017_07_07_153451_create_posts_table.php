<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('categorie_id');
            $table->unsignedInteger('genre_id');
            $table->string('title');
            $table->text('description');
            $table->string('typeCheveux');
            $table->string('city');
            $table->string('adress');
            $table->string('zip');
            $table->string('email');
            $table->string('phone')->nullable;
            $table->double('prixSalon');
            $table->double('prixDomicile');
            $table->string('distanceDeplacement');
            $table->boolean('statut')->default(false);
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users');
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
