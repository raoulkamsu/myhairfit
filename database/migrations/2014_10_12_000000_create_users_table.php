<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('firstName');
            $table->string('adress');
            $table->string('zip');
            $table->string('city');
            $table->string('province');
            $table->string('country')->default('canada');
            $table->string('phone')->nullable;
            $table->string('description');
            $table->string('type');
            $table->boolean('emailStaut')->default(false);
            $table->boolean('infoLettre')->default(true);
            $table->boolean('token')->nullable;
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
