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
    Attribute::truncate();

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
      'name' => 'Centímetro',
      'value' => 'cm'
    ]);
    Attribute::create([
      'attribute_id' => $parent->id,
      'name' => 'Milímetro',
      'value' => 'mm'
    ]);
    Attribute::create([
      'attribute_id' => $parent->id,
      'name' => 'Pulgada',
      'value' => 'in'
    ]);

//    Weight Unit
    $parent = Attribute::create([
      'name' => 'Weight Unit',
    ]);
    Attribute::create([
      'attribute_id' => $parent->id,
      'name' => 'Gramo',
      'value' => 'gr'
    ]);
    Attribute::create([
      'attribute_id' => $parent->id,
      'name' => 'Kilogramo',
      'value' => 'kl'
    ]);
    Attribute::create([
      'attribute_id' => $parent->id,
      'name' => 'Libra',
      'value' => 'lb'
    ]);
    Attribute::create([
      'attribute_id' => $parent->id,
      'name' => 'Onza',
      'value' => 'oz'
    ]);


//    Volume Unit
    $parent = Attribute::create([
      'name' => 'Volume Unit',
    ]);
    Attribute::create([
      'attribute_id' => $parent->id,
      'name' => 'Onza líquida estadounidense',
      'value' => 'oz'
    ]);
    Attribute::create([
      'attribute_id' => $parent->id,
      'name' => 'Taza americana oficial',
      'value' => 'tz'
    ]);
    Attribute::create([
      'attribute_id' => $parent->id,
      'name' => 'Mililitro',
      'value' => 'ml'
    ]);
    Attribute::create([
      'attribute_id' => $parent->id,
      'name' => 'Litro',
      'value' => 'l'
    ]);

//    Type of social network
    $parent = Attribute::create([
      'name' => 'Social networks',
    ]);
    Attribute::create([
      'attribute_id' => $parent->id,
      'name' => 'Facebook',
      'value' => 'Fb'
    ]);
    Attribute::create([
      'attribute_id' => $parent->id,
      'name' => 'Twitter',
      'value' => 'Tw'
    ]);
    Attribute::create([
      'attribute_id' => $parent->id,
      'name' => 'Likedind',
      'value' => 'Lk'
    ]);
    Attribute::create([
      'attribute_id' => $parent->id,
      'name' => 'Youtube',
      'value' => 'Yt'
    ]);
    Attribute::create([
      'attribute_id' => $parent->id,
      'name' => 'Instagram',
      'value' => 'Ig'
    ]);


  }
}
