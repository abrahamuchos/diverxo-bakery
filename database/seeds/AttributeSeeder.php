<?php

use App\Attribute;
use Illuminate\Database\Seeder;

class AttributeSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
//    Roles Attributes
    $group = Attribute::create([
      'name' => 'Groups',
    ]);

    Attribute::create([
      'attribute_id' => $group->id,
      'name' => 'User'
    ]);

    Attribute::create([
      'attribute_id' => $group->id,
      'name' => 'Admin'
    ]);

//    Size Units
    $parent = Attribute::create([
      'name' => 'Size Units',
    ]);
    Attribute::create([
      'attribute_id' => $parent->id,
      'name' => 'cm',
      'value' => 'Centímetro'
    ]);
    Attribute::create([
      'attribute_id' => $parent->id,
      'name' => 'mm',
      'value' => 'Milímetro'
    ]);
    Attribute::create([
      'attribute_id' => $parent->id,
      'name' => 'in',
      'value' => 'Pulgada'
    ]);

//    Weight Unit
    $parent = Attribute::create([
      'name' => 'Weight Unit',
    ]);
    Attribute::create([
      'attribute_id' => $parent->id,
      'name' => 'g',
      'value' => 'gramo'
    ]);
    Attribute::create([
      'attribute_id' => $parent->id,
      'name' => 'Kl',
      'value' => 'Kilogramo'
    ]);
    Attribute::create([
      'attribute_id' => $parent->id,
      'name' => 'Lb',
      'value' => 'Libra'
    ]);
    Attribute::create([
      'attribute_id' => $parent->id,
      'name' => 'Oz',
      'value' => 'Onza'
    ]);


//    Volume Unit
    $parent = Attribute::create([
      'name' => 'Volume Unit',
    ]);
    Attribute::create([
      'attribute_id' => $parent->id,
      'name' => 'oz',
      'value' => 'Onza líquida estadounidense'
    ]);
    Attribute::create([
      'attribute_id' => $parent->id,
      'name' => 'tz',
      'value' => 'Taza americana oficial'
    ]);
    Attribute::create([
      'attribute_id' => $parent->id,
      'name' => 'ml',
      'value' => 'Mililitro'
    ]);
    Attribute::create([
      'attribute_id' => $parent->id,
      'name' => 'l',
      'value' => 'Litro'
    ]);



  }
}
