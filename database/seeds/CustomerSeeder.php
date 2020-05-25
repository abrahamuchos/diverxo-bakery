<?php

use App\Customer;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    Customer::truncate();

    Customer::create([
      'user_id' => 4,
      'type_id' => 25,
      'customer_id' => 'cus_HLIfzyWl3UXc4W'
    ]);
    Customer::create([
      'user_id' => 5,
      'type_id' => 25,
      'customer_id' => 'cus_HLIiwnKc8Vm5QK'
    ]);
    Customer::create([
      'user_id' => 6,
      'type_id' => 25,
      'customer_id' => 'cus_HLIjZgW4G5NlHW'
    ]);
    Customer::create([
      'user_id' => 7,
      'type_id' => 25,
      'customer_id' => 'cus_HLIjpLQ2YcNk3R'
    ]);
    Customer::create([
      'user_id' => 8,
      'type_id' => 25,
      'customer_id' => 'cus_HLIjogceHxFgZU'
    ]);
    Customer::create([
      'user_id' => 9,
      'type_id' => 25,
      'customer_id' => 'cus_HLIjVrtKNcDoYn'
    ]);
    Customer::create([
      'user_id' => 10,
      'type_id' => 25,
      'customer_id' => 'cus_HLIkrpNysg6kHd'
    ]);
    Customer::create([
      'user_id' => 11,
      'type_id' => 25,
      'customer_id' => 'cus_HLIkVnna76gDIu'
    ]);
    Customer::create([
      'user_id' => 12,
      'type_id' => 25,
      'customer_id' => 'cus_HLIkqvnDf0VxBa'
    ]);
    Customer::create([
      'user_id' => 13,
      'type_id' => 25,
      'customer_id' => 'cus_HLIkxHI1wdqycK'
    ]);

  }
}
