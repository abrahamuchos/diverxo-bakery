<?php

use App\Category;
use App\Helpers\Miscellaneous;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    Category::truncate();

//   Pan
    Category::create([
      'name' => 'Pan',
      'slug' => Miscellaneous::slugify('Pan')
    ]);

//    Bollería
    $parent = Category::create([
      'name' => 'Bollería',
      'slug' => Miscellaneous::slugify('Bollería')
    ]);
    Category::create([
      'category_id' => $parent->id,
      'name' => 'Croitssant',
      'slug' => Miscellaneous::slugify('Croitssant')
    ]);
    Category::create([
      'category_id' => $parent->id,
      'name' => 'Empanadillas',
      'slug' => Miscellaneous::slugify('Empanadillas')
    ]);
    Category::create([
      'category_id' => $parent->id,
      'name' => 'Hojaldre',
      'slug' => Miscellaneous::slugify('Hojaldre')
    ]);

//  Creeampie
    $parent = Category::create([
      'name' => 'Creeampie',
      'slug' => Miscellaneous::slugify('Creeampie')
    ]);
    Category::create([
      'category_id' => $parent->id,
      'name' => 'Salados',
      'slug' => Miscellaneous::slugify('Salados')
    ]);
    Category::create([
      'category_id' => $parent->id,
      'name' => 'Dulces',
      'slug' => Miscellaneous::slugify('Dulces')
    ]);

//  Emparedados
    $parent = Category::create([
      'name' => 'Emparedados',
      'slug' => Miscellaneous::slugify('Emparedados')
    ]);
    Category::create([
      'category_id' => $parent->id,
      'name' => 'Panini',
      'slug' => Miscellaneous::slugify('Panini')
    ]);
    Category::create([
      'category_id' => $parent->id,
      'name' => 'Sandwich',
      'slug' => Miscellaneous::slugify('Sandwich')
    ]);

//    Bebidas
    $parent = Category::create([
      'name' => 'Bebidas',
      'slug' => Miscellaneous::slugify('Bebidas')
    ]);
    Category::create([
      'category_id' => $parent->id,
      'name' => 'Caliente',
      'slug' => Miscellaneous::slugify('Caliente')
    ]);
    Category::create([
      'category_id' => $parent->id,
      'name' => 'Fría',
      'slug' => Miscellaneous::slugify('Fría')
    ]);


  }
}
