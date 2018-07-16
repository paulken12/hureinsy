<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\EmpBasicInfo::class, function (Faker $faker) {
    $title = $faker->sentence;
    $name = $faker->word;
    return [
        'user_id' => function () {
            return factory('App\User')->create()->id;
        },
        'company_id' => str_random(4),
        'master_name_extension_key' => $faker->name,
        'last_name' => $faker->lastName,
        'first_name' => $faker->firstName,
        'middle_name' => $faker->lastName,
        'master_gender_key' => 'm',
        'master_civil_status_key' => str_random(1),
        'master_citizenship_key' => str_random(1),
        'date_of_birth' => $faker->date(),
        'birth_place' => $name,
        'master_employee_type_key' => str_random(1),
    ];
});

