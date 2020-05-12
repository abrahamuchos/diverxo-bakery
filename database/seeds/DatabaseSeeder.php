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
      CategorySeeder::class,
    ]);

//    To delete table
//    $this->truncateTable([
//      'users',
//    ]);
  }

  /**
   * @param array $tables
   */
  private function truncateTable(array $tables): void
  {
//    DB::statement('SET FOREING_KEY_CHECKS = 0;');
    foreach ($tables as $table) {
      DB::table($table)->truncate();
    }
//    DB::statement('SET FOREING_KEY_CHECKS = 1;');
  }
}
