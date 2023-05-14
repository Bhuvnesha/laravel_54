<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\AssetCategory;
use Faker\Generator as Faker;

$factory->define(AssetCategory::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'description' => $faker->text,
        'is_active' => 1,
        // Add more columns and their fake data as needed
    ];
});
