<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Horaire extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('horaires', function (Blueprint $table) {
            $table->increments('id');
            $table->string('lundi')->nullable;
            $table->string('mardi')->nullable;
            $table->string('mercredi')->nullable;
            $table->string('jeudi')->nullable;
            $table->string('vendredi')->nullable;
            $table->string('samedi')->nullable;
            $table->string('dimanche')->nullable;
            $table->integer('post_id')->unsigned();
            $table->foreign('post_id')->references('id')->on('posts');
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
        //
    }
}
