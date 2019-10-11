<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\About::class, function (Faker $faker) {
    return [
        
        'about_data' => $faker->paragraph(2),
        
    ];
});
