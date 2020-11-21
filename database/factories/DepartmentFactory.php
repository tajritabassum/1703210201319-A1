<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Department;
use Faker\Generator as Faker;

$factory->define(Department::class, function (Faker $faker) {
	$name = $faker->name;
    return [
        'name' => $faker->name,
        'short_name' => $faker->name,
    ];
});
