<?php

use App\Category;
use App\Media;
use Illuminate\Database\Seeder;

class MediaSeed extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
//    Media::truncate();

//    Categories
    Media::create([
      'category_id' => 1,
      'name' => 'Image Test Category',
      'src' => 'Uploads/Products/Category pan.jpg',
      'type' => 'image'
    ]);
    Media::create([
      'category_id' => 2,
      'name' => 'Image Test Category',
      'src' => 'Uploads/Products/Category bolleria.jpg',
      'type' => 'image'
    ]);
    Media::create([
      'category_id' => 3,
      'name' => 'Image Test Category',
      'src' => 'Uploads/Products/',
      'type' => 'image'
    ]);
    Media::create([
      'category_id' => 4,
      'name' => 'Image Test Category',
      'src' => 'Uploads/Products/Category Empanadillas.jpeg',
      'type' => 'image'
    ]);
    Media::create([
      'category_id' => 5,
      'name' => 'Image Test Category',
      'src' => 'Uploads/Products/Category hojaldre.jpg',
      'type' => 'image'
    ]);
    Media::create([
      'category_id' => 6,
      'name' => 'Image Test Category',
      'src' => 'Uploads/Products/Category Creampie.jpg',
      'type' => 'image'
    ]);
    Media::create([
      'category_id' => 7,
      'name' => 'Image Test Category',
      'src' => 'Uploads/Products/Category Dulce.jpg',
      'type' => 'image'
    ]);
    Media::create([
      'category_id' => 8,
      'name' => 'Image Test Category',
      'src' => 'Uploads/Products/Category Salado.jpg',
      'type' => 'image'
    ]);
    Media::create([
      'category_id' => 9,
      'name' => 'Image Test Category',
      'src' => 'Uploads/Products/Category Emparedado.jpeg',
      'type' => 'image'
    ]);
    Media::create([
      'category_id' => 10,
      'name' => 'Image Test Category',
      'src' => 'Uploads/Products/Category Panini.jpg',
      'type' => 'image'
    ]);
    Media::create([
      'category_id' => 11,
      'name' => 'Image Test Category',
      'src' => 'Uploads/Products/Category Sandwich.jp',
      'type' => 'image'
    ]);
    Media::create([
      'category_id' => 12,
      'name' => 'Image Test Category',
      'src' => 'Uploads/Products/Category Bebidas.jpeg',
      'type' => 'image'
    ]);
    Media::create([
      'category_id' => 13,
      'name' => 'Image Test Category',
      'src' => 'Uploads/Products/',
      'type' => 'image'
    ]);
    Media::create([
      'category_id' => 14,
      'name' => 'Image Test Category',
      'src' => 'Uploads/Products/Category Frias.jpeg',
      'type' => 'image'
    ]);

//    Products


  }
}
