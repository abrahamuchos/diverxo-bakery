<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

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

$factory->define(User::class, function (Faker $faker) {
  $gender = (random_int(0,1) == 1) ? 'male' : 'female';
  return [
    'email' => $faker->unique()->safeEmail,
    'is_admin' => false,
    'name' => $faker->firstName($gender),
    'gender' => ($gender == 'male') ? true : false,
    'last_name' => $faker->lastName,
    'avatar' => ($gender == 'male') ? 'Uploads/Profiles/avatar-male.svg' : 'Uploads/Profiles/avatar-female.svg',
    'email_verified_at' => now(),
    'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
    'remember_token' => Str::random(10),
    'document'=> (random_int(0,1) == 1) ? random_int(1303001,25258905) : null,
    'country' => $faker->country,
    'state' =>  $faker->state,
    'city' => $faker->city,
    'address_line1' => $faker->streetName,
    'address_line2' => $faker->streetAddress,
    'phone_number' => $faker->e164PhoneNumber,
    'is_subscriber' => $faker->boolean(30)
  ];
});
