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

$factory->define(App\Workout::class, function (Faker\Generator $faker) {
    return [
        'user_id' => $faker->numberBetween($min = 1, $max = 50),
        'title' => $faker->sentence($nbWords = 6),
        'date' => $faker->dateTimeThisYear($max = 'now'),
        'duration' => $faker->numberBetween($min = 20, $max = 180),
        'distance' => $faker->numberBetween($min = 2, $max = 100),
        'activity_id' => 1,
        'body' => $faker->paragraph($nbSentences = 3),
        'image' => $faker->imageUrl($width = 640, $height = 480),
        'location' => $faker->city
    ];
});


$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'role' => 'Rower',
        'name' => $faker->name($gender = null|'male'|'female'), 
        'city' => $faker->city,
        'country' => $faker->country,
        'bio' => $faker->sentence($nbWords = 27),
        'email' => $faker->safeEmail,
        'photo' => $faker->imageUrl($width = 250, $height = 300),
        'created_at' => $faker->dateTimeThisYear($max = 'now'),
        'password' => Hash::make(123456),
    ];
});