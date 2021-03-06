<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
        'emailStaut'=> true,
    ];
});

$factory->define(App\Post::class, function ($faker)
                 {
                     return[
                         'user_id' => function(){
                             return factory('App\User')->create()->id;
                         },
                         'title' => $faker->sentence,
                         'description' => $faker->paragraph,
                         'categorie' => $faker->sentence,
                         'typeCheveux' => $faker->sentence,
                         'sexe' => $faker->sex,
                         'prixSalon' => $faker->price,
                         'prixDomicile' => $faker->price,
                         'distanceDeplacement' => $faker->double,
                     ];
                 });

    