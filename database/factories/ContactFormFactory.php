<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\ContactForm;
use Faker\Generator as Faker;

$factory->define(ContactForm::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'title' => $faker->realText(50),
        'email' => $faker->unique()->email,
        'url' => $faker->url,
        'gender' => $faker->randomElement(['0', '1']),
        'age' => $faker->randomElement(['1', '2', '3', '4']),
        'contact' => $faker->realText(200),
    ];
});
