<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
  /**
   * Seed the application's database.
   *
   * @return void
   */
  public function run()
  {
    $this->call([
      UserSeeder::class,
      AttributeSeeder::class,
      CategorySeeder::class,
      ProductSeeder::class,
      CustomerSeeder::class,
      MediaSeeder::class
    ]);

  }

}
