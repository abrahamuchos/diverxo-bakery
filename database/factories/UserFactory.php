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
    'is_admin' => $faker->boolean(40),
    'name' => $faker->firstName($gender),
    'last_name' => $faker->lastName,
    'avatar' => ($gender == 'male') ? 'Uploads/Profiles/avatar-male.svg' : 'Uploads/Profiles/avatar-female.svg',
    'email_verified_at' => now(),
    'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
    'remember_token' => Str::random(10),
    'document'=> (random_int(0,1) == 1) ? random_int(1303001,25258905) : null,
    'country' => $country = (random_int(0,1) == 1) ? $faker->country : null,
    'state' => ($country) ? $faker->state : null,
    'city' => ($country) ? $faker->city : null,
    'address_line1' => ($country) ? $faker->streetName : null,
    'address_line2' => ($country) ? $faker->streetAddress : null,
    'phone_number' => ($country) ? $faker->e164PhoneNumber :null,
    'is_subscriber' => $faker->boolean(30)
  ];
});
