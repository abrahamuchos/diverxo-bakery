<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    User::truncate();

    User::create([
      'email' => 'admin@wayuinc.com',
      'is_admin' => true,
      'gender' => true,
      'name' => 'Abraham',
      'last_name' => 'Gonzalez',
      'password' => Hash::make('password'),
      'country' => 'Venezuela',
      'state' => 'Miranda',
      'city' => 'Guarenas',
      'address_line1' => 'Urb. Nueva Casarapa Sector casona baja',
      'address_line2' => 'Casa d3-23',
      'phone_number' => '4164175422',
      'is_subscriber' => false
    ]);
    User::create([
      'email' => 'client@diverxo.com',
      'is_admin' => true,
      'gender' => true,
      'name' => 'Andres',
      'last_name' => 'Reveron',
      'password' => Hash::make('password'),
      'country' => 'Venezuela',
      'state' => 'Miranda',
      'city' => 'Guarenas',
      'address_line1' => 'Urb. Nueva Casarapa Sector casona baja',
      'address_line2' => 'Casa d3-23',
      'phone_number' => '4164175422',
      'is_subscriber' => false
    ]);
    User::create([
      'email' => 'client2@diverxo.com',
      'is_admin' => true,
      'gender' => true,
      'name' => 'Andres',
      'last_name' => 'Reveron',
      'password' => Hash::make('password'),
      'country' => 'Venezuela',
      'state' => 'Miranda',
      'city' => 'Guarenas',
      'address_line1' => 'Urb. Nueva Casarapa Sector casona baja',
      'address_line2' => 'Casa d3-23',
      'phone_number' => '4164175422',
      'is_subscriber' => false
    ]);
    factory(User::class, 10)->create();
  }
}
