<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class SqlSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    DB::unprepared(File::get(base_path('database/media-products.sql')));
    DB::unprepared(File::get(base_path('database/orders.sql')));
    DB::unprepared(File::get(base_path('database/items.sql')));
  }
}
