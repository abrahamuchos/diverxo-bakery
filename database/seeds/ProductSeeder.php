<?php

use App\Helpers\Miscellaneous;
use App\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    Product::truncate();

//    Panes
    Product::create([
      'category_id' => 1,
      'name' => 'Pan Tradicional',
      'slug' => Miscellaneous::slugify('Pan Tradicional'),
      'old_price' => null,
      'price' => 1.5,
      'pre_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
      'stock' => 300,
      'size' => 55,
      'size_unit_id' => 5,
      'weight' => 250,
      'weight_unit_id' => 9,
    ]);
    Product::create([
      'category_id' => 1,
      'name' => 'Pan integral',
      'slug' => Miscellaneous::slugify('Pan integral'),
      'old_price' => null,
      'price' => 2,
      'pre_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
      'stock' => 275,
      'size' => 55,
      'size_unit_id' => 5,
      'weight' => 250,
      'weight_unit_id' => 9,
    ]);
    Product::create([
      'category_id' => 1,
      'name' => 'Pan enriquecido',
      'slug' => Miscellaneous::slugify('Pan enriquecido'),
      'old_price' => null,
      'price' => 2,
      'pre_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
      'stock' => 275,
      'size' => 55,
      'size_unit_id' => 5,
      'weight' => 250,
      'weight_unit_id' => 9,
    ]);
    Product::create([
      'category_id' => 1,
      'name' => 'Pan de semillas',
      'slug' => Miscellaneous::slugify('Pan de semillas'),
      'old_price' => 2,
      'price' => 1.75,
      'pre_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
      'stock' => 450,
      'size' => 55,
      'size_unit_id' => 5,
      'weight' => 250,
      'weight_unit_id' => 9,
    ]);
    Product::create([
      'category_id' => 1,
      'name' => 'Pan Dulce',
      'slug' => Miscellaneous::slugify('Pan Dulce'),
      'old_price' => null,
      'price' => 1.6,
      'pre_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
      'stock' => 300,
      'size' => 55,
      'size_unit_id' => 5,
      'weight' => 250,
      'weight_unit_id' => 9,
    ]);
    Product::create([
      'category_id' => 1,
      'name' => 'Pan Bagget',
      'slug' => Miscellaneous::slugify('Pan Bagget'),
      'old_price' => 1.5,
      'price' => 1,
      'pre_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
      'stock' => 500,
      'size' => 55,
      'size_unit_id' => 5,
      'weight' => 250,
      'weight_unit_id' => 9,
    ]);
    Product::create([
      'category_id' => 1,
      'name' => 'Pan Artesano',
      'slug' => Miscellaneous::slugify('Pan Artesano'),
      'old_price' => 2.2,
      'price' => 1.9,
      'pre_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
      'stock' => 300,
      'size' => 55,
      'size_unit_id' => 5,
      'weight' => 250,
      'weight_unit_id' => 9,
    ]);

//    Croitssant
    Product::create([
      'category_id' => 3,
      'name' => 'Croitssant Clásico',
      'slug' => Miscellaneous::slugify('Croitssant Clásico'),
      'old_price' => 2.5,
      'price' => 2,
      'pre_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
      'stock' => 150,
      'size' => 15,
      'size_unit_id' => 5,
      'weight' => 100,
      'weight_unit_id' => 9,
    ]);
    Product::create([
      'category_id' => 3,
      'name' => 'Croitssant de Mantequilla',
      'slug' => Miscellaneous::slugify('Croitssant de Mantequilla'),
      'old_price' => 2.5,
      'price' => 2,
      'pre_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
      'stock' => 170,
      'size' => 15,
      'size_unit_id' => 5,
      'weight' => 100,
      'weight_unit_id' => 9,
    ]);
    Product::create([
      'category_id' => 3,
      'name' => 'Croitssant Almendras',
      'slug' => Miscellaneous::slugify('Croitssant Almendras'),
      'old_price' => null,
      'price' => 2.5,
      'pre_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
      'stock' => 100,
      'size' => 15,
      'size_unit_id' => 5,
      'weight' => 100,
      'weight_unit_id' => 9,
    ]);
    Product::create([
      'category_id' => 3,
      'name' => 'Croitssant relleno de Chocolate',
      'slug' => Miscellaneous::slugify('Croitssant relleno de Chocolate'),
      'old_price' => null,
      'price' => 2.5,
      'pre_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
      'stock' => 150,
      'size' => 15,
      'size_unit_id' => 5,
      'weight' => 100,
      'weight_unit_id' => 9,
    ]);
    Product::create([
      'category_id' => 3,
      'name' => 'Croitssant relleno Jamón de Pavo',
      'slug' => Miscellaneous::slugify('Croitssant relleno Jamón de Pavo'),
      'old_price' => null,
      'price' => 2.5,
      'pre_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
      'stock' => 130,
      'size' => 15,
      'size_unit_id' => 5,
      'weight' => 100,
      'weight_unit_id' => 9,
    ]);
    Product::create([
      'category_id' => 3,
      'name' => 'Croitssant relleno Jamón',
      'slug' => Miscellaneous::slugify('Croitssant relleno Jamón'),
      'old_price' => null,
      'price' => 2.5,
      'pre_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
      'stock' => 150,
      'size' => 15,
      'size_unit_id' => 5,
      'weight' => 100,
      'weight_unit_id' => 9,
    ]);
    Product::create([
      'category_id' => 3,
      'name' => 'Croitssant relleno Jamón y Queso',
      'slug' => Miscellaneous::slugify('Croitssant relleno Jamón y Queso'),
      'old_price' => null,
      'price' => 2.5,
      'pre_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
      'stock' => 150,
      'size' => 15,
      'size_unit_id' => 5,
      'weight' => 100,
      'weight_unit_id' => 9,
    ]);

//    Empanadillas
    Product::create([
      'category_id' => 4,
      'name' => 'Empanadillas  carne',
      'slug' => Miscellaneous::slugify('Empanadillas  carne'),
      'old_price' => 2.3,
      'price' => 2,
      'pre_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
      'stock' => 150,
      'size' => 15,
      'size_unit_id' => 5,
      'weight' => 100,
      'weight_unit_id' => 9,
    ]);
    Product::create([
      'category_id' => 4,
      'name' => 'Empanadillas vieras y esparragos',
      'slug' => Miscellaneous::slugify('Empanadillas vieras y esparragos'),
      'old_price' => null,
      'price' => 2,
      'pre_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
      'stock' => 150,
      'size' => 15,
      'size_unit_id' => 5,
      'weight' => 100,
      'weight_unit_id' => 9,
    ]);
    Product::create([
      'category_id' => 4,
      'name' => 'Empanadillas tortilla',
      'slug' => Miscellaneous::slugify('Empanadillas tortilla'),
      'old_price' => null,
      'price' => 2,
      'pre_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
      'stock' => 150,
      'size' => 15,
      'size_unit_id' => 5,
      'weight' => 100,
      'weight_unit_id' => 9,
    ]);

//    Hojaldre
    Product::create([
      'category_id' => 5,
      'name' => 'Hojaldre queso y espinacas',
      'slug' => Miscellaneous::slugify('Hojaldre queso y espinacas'),
      'old_price' => null,
      'price' => 1.5,
      'pre_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
      'stock' => 70,
      'size' => 12,
      'size_unit_id' => 5,
      'weight' => 100,
      'weight_unit_id' => 9,
    ]);
    Product::create([
      'category_id' => 5,
      'name' => 'Hojaldre york-queso',
      'slug' => Miscellaneous::slugify('Hojaldre york-queso'),
      'old_price' => null,
      'price' => 1.5,
      'pre_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
      'stock' => 70,
      'size' => 12,
      'size_unit_id' => 5,
      'weight' => 100,
      'weight_unit_id' => 9,
    ]);

//    Salados
    Product::create([
      'category_id' => 7,
      'name' => 'Creeampie de carne',
      'slug' => Miscellaneous::slugify('Creeampie de carne'),
      'old_price' => null,
      'price' => 1.7,
      'pre_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
      'stock' => 90,
      'size' => 15,
      'size_unit_id' => 5,
      'weight' => 90,
      'weight_unit_id' => 9,
    ]);
    Product::create([
      'category_id' => 7,
      'name' => 'Creeampie vieras y esparragos',
      'slug' => Miscellaneous::slugify('Creeampie vieras y esparragos'),
      'old_price' => null,
      'price' => 1.7,
      'pre_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
      'stock' => 90,
      'size' => 15,
      'size_unit_id' => 5,
      'weight' => 90,
      'weight_unit_id' => 9,
    ]);
    Product::create([
      'category_id' => 7,
      'name' => 'Creeampie tortilla',
      'slug' => Miscellaneous::slugify('Creeampie tortilla'),
      'old_price' => null,
      'price' => 1.7,
      'pre_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
      'stock' => 90,
      'size' => 15,
      'size_unit_id' => 5,
      'weight' => 90,
      'weight_unit_id' => 9,
    ]);

//  Dulces
    Product::create([
      'category_id' => 8,
      'name' => 'Creeampie Nutela',
      'slug' => Miscellaneous::slugify('Creeampie Nutela'),
      'old_price' => null,
      'price' => 1.7,
      'pre_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
      'stock' => 90,
      'size' => 15,
      'size_unit_id' => 5,
      'weight' => 90,
      'weight_unit_id' => 9,
    ]);
    Product::create([
      'category_id' => 8,
      'name' => 'Creeampie Nutela y Cambur',
      'slug' => Miscellaneous::slugify('Creeampie Nutela y Cambur'),
      'old_price' => null,
      'price' => 1.7,
      'pre_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
      'stock' => 90,
      'size' => 15,
      'size_unit_id' => 5,
      'weight' => 90,
      'weight_unit_id' => 9,
    ]);

//  Panini
    Product::create([
      'category_id' => 10,
      'name' => 'Panini Clásico',
      'slug' => Miscellaneous::slugify('Panini Clásico'),
      'old_price' => null,
      'price' => 4,
      'pre_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
      'stock' => 165,
      'size' => 20,
      'size_unit_id' => 5,
      'weight' => 250,
      'weight_unit_id' => 9,
    ]);
    Product::create([
      'category_id' => 10,
      'name' => 'Panini Tent',
      'slug' => Miscellaneous::slugify('Panini Tent'),
      'old_price' => null,
      'price' => 4,
      'pre_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
      'stock' => 165,
      'size' => 20,
      'size_unit_id' => 5,
      'weight' => 250,
      'weight_unit_id' => 9,
    ]);
    Product::create([
      'category_id' => 10,
      'name' => 'Panini Roastbeef',
      'slug' => Miscellaneous::slugify('Panini Roastbeef'),
      'old_price' => null,
      'price' => 4.5,
      'pre_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
      'stock' => 165,
      'size' => 20,
      'size_unit_id' => 5,
      'weight' => 250,
      'weight_unit_id' => 9,
    ]);
    Product::create([
      'category_id' => 10,
      'name' => 'Panini Gordon Blue',
      'slug' => Miscellaneous::slugify('Panini Gordon Blue'),
      'old_price' => null,
      'price' => 4.5,
      'pre_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
      'stock' => 165,
      'size' => 20,
      'size_unit_id' => 5,
      'weight' => 250,
      'weight_unit_id' => 9,
    ]);
    Product::create([
      'category_id' => 10,
      'name' => 'Panini trío quesos',
      'slug' => Miscellaneous::slugify('Panini trío quesos'),
      'old_price' => null,
      'price' => 4.5,
      'pre_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
      'stock' => 165,
      'size' => 20,
      'size_unit_id' => 5,
      'weight' => 250,
      'weight_unit_id' => 9,
    ]);
    Product::create([
      'category_id' => 10,
      'name' => 'Panini Jamón Pavo',
      'slug' => Miscellaneous::slugify('Panini Jamón Pavo'),
      'old_price' => null,
      'price' => 4.5,
      'pre_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
      'stock' => 165,
      'size' => 20,
      'size_unit_id' => 5,
      'weight' => 250,
      'weight_unit_id' => 9,
    ]);

//  Sandwich
    Product::create([
      'category_id' => 11,
      'name' => '7G de Pollo',
      'slug' => Miscellaneous::slugify('7G de Pollo'),
      'old_price' => 5.5,
      'price' => 5,
      'pre_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
      'stock' => 170,
      'size' => 20,
      'size_unit_id' => 5,
      'weight' => 200,
      'weight_unit_id' => 9,
    ]);
    Product::create([
      'category_id' => 11,
      'name' => '7G Atún',
      'slug' => Miscellaneous::slugify('7G Atún'),
      'old_price' => 6.5,
      'price' => 5,
      'pre_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
      'stock' => 165,
      'size' => 20,
      'size_unit_id' => 5,
      'weight' => 200,
      'weight_unit_id' => 9,
    ]);
    Product::create([
      'category_id' => 11,
      'name' => 'Jamón de Pavo',
      'slug' => Miscellaneous::slugify('Jamón de Pavo'),
      'old_price' => null,
      'price' => 4.5,
      'pre_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
      'stock' => 165,
      'size' => 20,
      'size_unit_id' => 5,
      'weight' => 200,
      'weight_unit_id' => 9,
    ]);
    Product::create([
      'category_id' => 11,
      'name' => '7G Roastbeef',
      'slug' => Miscellaneous::slugify('7G Roastbeef'),
      'old_price' => null,
      'price' => 5,
      'pre_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
      'stock' => 75,
      'size' => 20,
      'size_unit_id' => 5,
      'weight' => 200,
      'weight_unit_id' => 9,
    ]);

//    Bebidas Caliente
    Product::create([
      'category_id' => 13,
      'name' => 'Café Bonbom',
      'slug' => Miscellaneous::slugify('Café Bonbom'),
      'old_price' => null,
      'price' => 3,
      'pre_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
      'stock' => 300,
      'volume' => 12,
      'volume_unit_id' => 14
    ]);
    Product::create([
      'category_id' => 13,
      'name' => 'Café Latte',
      'slug' => Miscellaneous::slugify('Café Latte'),
      'old_price' => null,
      'price' => 3,
      'pre_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
      'stock' => 300,
      'volume' => 12,
      'volume_unit_id' => 14
    ]);
    Product::create([
      'category_id' => 13,
      'name' => 'Café Expresso',
      'slug' => Miscellaneous::slugify('Café Expresso'),
      'old_price' => null,
      'price' => 3,
      'pre_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
      'stock' => 300,
      'volume' => 12,
      'volume_unit_id' => 14
    ]);
    Product::create([
      'category_id' => 13,
      'name' => 'Café Capuccino',
      'slug' => Miscellaneous::slugify('Café Capuccino'),
      'old_price' => null,
      'price' => 3,
      'pre_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
      'stock' => 300,
      'volume' => 12,
      'volume_unit_id' => 14
    ]);
    Product::create([
      'category_id' => 13,
      'name' => 'Café Mocha',
      'slug' => Miscellaneous::slugify('Café Mocha'),
      'old_price' => null,
      'price' => 3.5,
      'pre_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
      'stock' => 300,
      'volume' => 12,
      'volume_unit_id' => 14
    ]);
    Product::create([
      'category_id' => 13,
      'name' => 'Té Jasmin',
      'slug' => Miscellaneous::slugify('Té Jasmin'),
      'old_price' => null,
      'price' => 3,
      'pre_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
      'stock' => 300,
      'volume' => 12,
      'volume_unit_id' => 14
    ]);
    Product::create([
      'category_id' => 13,
      'name' => 'Té Manzanilla',
      'slug' => Miscellaneous::slugify('Té Manzanilla'),
      'old_price' => null,
      'price' => 3,
      'pre_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
      'stock' => 300,
      'volume' => 12,
      'volume_unit_id' => 14
    ]);
    Product::create([
      'category_id' => 13,
      'name' => 'Té Negro',
      'slug' => Miscellaneous::slugify('Té Negro'),
      'old_price' => null,
      'price' => 3,
      'pre_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
      'stock' => 300,
      'volume' => 12,
      'volume_unit_id' => 14
    ]);
    Product::create([
      'category_id' => 13,
      'name' => 'Té London',
      'slug' => Miscellaneous::slugify('Té London'),
      'old_price' => null,
      'price' => 3,
      'pre_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
      'stock' => 300,
      'volume' => 12,
      'volume_unit_id' => 14
    ]);

//  Bebidas Fría
    Product::create([
      'category_id' => 14,
      'name' => 'Coca Cola',
      'slug' => Miscellaneous::slugify('Coca Cola'),
      'old_price' => null,
      'price' => 4,
      'pre_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
      'stock' => 400,
      'volume' => 20,
      'volume_unit_id' => 14
    ]);
    Product::create([
      'category_id' => 14,
      'name' => '7Up',
      'slug' => Miscellaneous::slugify('7Up'),
      'old_price' => null,
      'price' => 4,
      'pre_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
      'stock' => 400,
      'volume' => 20,
      'volume_unit_id' => 14
    ]);
    Product::create([
      'category_id' => 14,
      'name' => 'Frapuccino',
      'slug' => Miscellaneous::slugify('Frapuccino'),
      'old_price' => null,
      'price' => 5,
      'pre_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
      'stock' => 300,
      'volume' => 25,
      'volume_unit_id' => 14
    ]);
    Product::create([
      'category_id' => 14,
      'name' => 'Frape Chocolate',
      'slug' => Miscellaneous::slugify('Frape Chocolate'),
      'old_price' => null,
      'price' => 5,
      'pre_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
      'stock' => 300,
      'volume' => 25,
      'volume_unit_id' => 14
    ]);
    Product::create([
      'category_id' => 14,
      'name' => 'Mocha Chips',
      'slug' => Miscellaneous::slugify('Mocha Chips'),
      'old_price' => null,
      'price' => 5,
      'pre_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
      'stock' => 300,
      'volume' => 25,
      'volume_unit_id' => 14
    ]);

  }
}
