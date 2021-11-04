<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Forum;
use Faker\Generator as Faker;

$factory->define(Forum::class, function (Faker $faker) {
       $title = $faker->sentence();
    return [
        'title' =>$title,
        'slug' => str_slug($title),
        'content' => $faker ->paragraph(),
        'user_id' => $faker->randomDigit(1,20),
        'department_id' => $faker-> randomDigit(1,20)

    ];
});
