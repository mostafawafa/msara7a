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
        'user_name' => $faker->name,
        'password' => $password ?: $password = bcrypt('secret'),
        'profile_photo' => $faker->sentence,
        'facebook' => $faker->sentence,
        'twitter' => $faker->sentence,
        'google_plus' => $faker->sentence,
        'remember_token' => str_random(10),
    ];
});

$factory->define(\App\Message::class,function(Faker\Generator $faker){

    $categories = ['messages' , 'question'];
    return [
      'user_id' => rand(1,50),
      'sender_id' => rand(1,50),
      'body' => $faker->paragraph(),
      'category' => $categories[rand(0,1)]

    ];

});

