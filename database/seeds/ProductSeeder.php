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
      'description' => "<!DOCTYPE html>
<html>
<head>
</head>
<body>
<p><span style=\"font-family: 'Open Sans', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin laoreet imperdiet purus. Nulla facilisi. Pellentesque viverra, purus ac consectetur porta, sem tellus varius metus, vitae bibendum diam neque suscipit tellus. Praesent pharetra, tellus consectetur dictum lacinia, sapien lacus congue arcu, in porttitor elit orci et orci. Fusce in lacus in nulla tristique volutpat in ac turpis. Ut aliquam sem ipsum. Curabitur ac nisl tempor, lobortis metus at, pellentesque ipsum. Proin pretium, leo et efficitur hendrerit, ipsum diam semper leo, id pulvinar mi justo molestie purus. Curabitur imperdiet consectetur convallis. Curabitur mattis metus dolor, vel vestibulum libero interdum sit amet. Integer vel ex nisi. <strong>Vivamus vitae lorem ullamcorper sem pellentesque sollicitudin et at quam.</strong> Duis molestie rhoncus sapien id auctor. <strong>Nunc lobortis mi ut sapien laoreet, lobortis egestas nibh auctor. Phasellus sed ornare ipsum. Curabitur ultricies neque ut lectus ornare congue.</strong></span></p>
<p><span style=\"font-family: 'Open Sans', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\"><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"../../Uploads/Products/content/1590400004.jpg\" alt=\"\" width=\"700\" height=\"460\" /></span></p>
<p><span style=\"font-family: 'Open Sans', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">Proin ac sagittis magna. Fusce maximus sit amet ex sed laoreet. Aliquam cursus nibh ac mi lobortis interdum. Praesent luctus leo in facilisis ullamcorper. Aenean ante nibh, egestas nec lorem sed, hendrerit pharetra turpis. Aliquam non eros placerat, rhoncus augue a, gravida eros. Quisque maximus, metus et egestas lobortis, enim neque euismod massa, in ultrices quam felis in magna. Donec sed imperdiet ex. Ut vulputate vehicula elit eget placerat. Duis eros tortor, dictum vel lacinia eget, pellentesque quis purus.</span></p>
<p><span style=\"font-family: 'Open Sans', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\"><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"../../Uploads/Products/content/1590400048.jpg\" alt=\"\" width=\"700\" height=\"467\" /></span></p>
<p><span style=\"font-family: 'Open Sans', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">Ut vel consectetur dolor. Nunc maximus tincidunt lectus, non interdum turpis scelerisque non. Nam tempor dui ut magna semper facilisis. Fusce quis est erat. Aenean egestas, tortor vitae sagittis vestibulum, ipsum eros vulputate eros, ut iaculis metus sem eu nunc. Sed mattis facilisis eleifend. Pellentesque odio ligula, aliquam vitae odio vitae, dictum molestie sem. Nullam dictum eros ut euismod egestas. Aenean pretium vulputate venenatis. Donec blandit, dolor nec fermentum laoreet, orci sapien semper turpis, id faucibus justo leo sit amet lectus. Etiam sollicitudin at leo a gravida. Phasellus pellentesque interdum nibh.</span></p>
<p style=\"text-align: center;\"><em><span style=\"font-family: 'Open Sans', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\"> In accumsan efficitur consectetur. Sed semper pharetra est nec finibus. Interdum et malesuada fames ac ante ipsum primis in faucibus. In hac habitasse platea dictumst.</span></em></p>
<p style=\"text-align: center;\"><span style=\"font-family: 'Open Sans', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\"><iframe src=\"https://www.youtube.com/embed/iUuKstAWof4\" width=\"560\" height=\"314\" allowfullscreen=\"allowfullscreen\"></iframe></span></p>
</body>
</html>"
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
      'description' => "<!DOCTYPE html>
<html>
<head>
</head>
<body>
<p><span style=\"font-family: 'Open Sans', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin laoreet imperdiet purus. Nulla facilisi. Pellentesque viverra, purus ac consectetur porta, sem tellus varius metus, vitae bibendum diam neque suscipit tellus. Praesent pharetra, tellus consectetur dictum lacinia, sapien lacus congue arcu, in porttitor elit orci et orci. Fusce in lacus in nulla tristique volutpat in ac turpis. Ut aliquam sem ipsum. Curabitur ac nisl tempor, lobortis metus at, pellentesque ipsum. Proin pretium, leo et efficitur hendrerit, ipsum diam semper leo, id pulvinar mi justo molestie purus. Curabitur imperdiet consectetur convallis. Curabitur mattis metus dolor, vel vestibulum libero interdum sit amet. Integer vel ex nisi. <strong>Vivamus vitae lorem ullamcorper sem pellentesque sollicitudin et at quam.</strong> Duis molestie rhoncus sapien id auctor. <strong>Nunc lobortis mi ut sapien laoreet, lobortis egestas nibh auctor. Phasellus sed ornare ipsum. Curabitur ultricies neque ut lectus ornare congue.</strong></span></p>
<p><span style=\"font-family: 'Open Sans', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\"><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"../../Uploads/Products/content/1590400004.jpg\" alt=\"\" width=\"700\" height=\"460\" /></span></p>
<p><span style=\"font-family: 'Open Sans', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">Proin ac sagittis magna. Fusce maximus sit amet ex sed laoreet. Aliquam cursus nibh ac mi lobortis interdum. Praesent luctus leo in facilisis ullamcorper. Aenean ante nibh, egestas nec lorem sed, hendrerit pharetra turpis. Aliquam non eros placerat, rhoncus augue a, gravida eros. Quisque maximus, metus et egestas lobortis, enim neque euismod massa, in ultrices quam felis in magna. Donec sed imperdiet ex. Ut vulputate vehicula elit eget placerat. Duis eros tortor, dictum vel lacinia eget, pellentesque quis purus.</span></p>
<p><span style=\"font-family: 'Open Sans', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\"><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"../../Uploads/Products/content/1590400048.jpg\" alt=\"\" width=\"700\" height=\"467\" /></span></p>
<p><span style=\"font-family: 'Open Sans', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">Ut vel consectetur dolor. Nunc maximus tincidunt lectus, non interdum turpis scelerisque non. Nam tempor dui ut magna semper facilisis. Fusce quis est erat. Aenean egestas, tortor vitae sagittis vestibulum, ipsum eros vulputate eros, ut iaculis metus sem eu nunc. Sed mattis facilisis eleifend. Pellentesque odio ligula, aliquam vitae odio vitae, dictum molestie sem. Nullam dictum eros ut euismod egestas. Aenean pretium vulputate venenatis. Donec blandit, dolor nec fermentum laoreet, orci sapien semper turpis, id faucibus justo leo sit amet lectus. Etiam sollicitudin at leo a gravida. Phasellus pellentesque interdum nibh.</span></p>
<p style=\"text-align: center;\"><em><span style=\"font-family: 'Open Sans', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\"> In accumsan efficitur consectetur. Sed semper pharetra est nec finibus. Interdum et malesuada fames ac ante ipsum primis in faucibus. In hac habitasse platea dictumst.</span></em></p>
<p style=\"text-align: center;\"><span style=\"font-family: 'Open Sans', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\"><iframe src=\"https://www.youtube.com/embed/iUuKstAWof4\" width=\"560\" height=\"314\" allowfullscreen=\"allowfullscreen\"></iframe></span></p>
</body>
</html>"
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
      'description' => "<!DOCTYPE html>
<html>
<head>
</head>
<body>
<p><span style=\"font-family: 'Open Sans', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin laoreet imperdiet purus. Nulla facilisi. Pellentesque viverra, purus ac consectetur porta, sem tellus varius metus, vitae bibendum diam neque suscipit tellus. Praesent pharetra, tellus consectetur dictum lacinia, sapien lacus congue arcu, in porttitor elit orci et orci. Fusce in lacus in nulla tristique volutpat in ac turpis. Ut aliquam sem ipsum. Curabitur ac nisl tempor, lobortis metus at, pellentesque ipsum. Proin pretium, leo et efficitur hendrerit, ipsum diam semper leo, id pulvinar mi justo molestie purus. Curabitur imperdiet consectetur convallis. Curabitur mattis metus dolor, vel vestibulum libero interdum sit amet. Integer vel ex nisi. <strong>Vivamus vitae lorem ullamcorper sem pellentesque sollicitudin et at quam.</strong> Duis molestie rhoncus sapien id auctor. <strong>Nunc lobortis mi ut sapien laoreet, lobortis egestas nibh auctor. Phasellus sed ornare ipsum. Curabitur ultricies neque ut lectus ornare congue.</strong></span></p>
<p><span style=\"font-family: 'Open Sans', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\"><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"../../Uploads/Products/content/1590400004.jpg\" alt=\"\" width=\"700\" height=\"460\" /></span></p>
<p><span style=\"font-family: 'Open Sans', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">Proin ac sagittis magna. Fusce maximus sit amet ex sed laoreet. Aliquam cursus nibh ac mi lobortis interdum. Praesent luctus leo in facilisis ullamcorper. Aenean ante nibh, egestas nec lorem sed, hendrerit pharetra turpis. Aliquam non eros placerat, rhoncus augue a, gravida eros. Quisque maximus, metus et egestas lobortis, enim neque euismod massa, in ultrices quam felis in magna. Donec sed imperdiet ex. Ut vulputate vehicula elit eget placerat. Duis eros tortor, dictum vel lacinia eget, pellentesque quis purus.</span></p>
<p><span style=\"font-family: 'Open Sans', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\"><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"../../Uploads/Products/content/1590400048.jpg\" alt=\"\" width=\"700\" height=\"467\" /></span></p>
<p><span style=\"font-family: 'Open Sans', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">Ut vel consectetur dolor. Nunc maximus tincidunt lectus, non interdum turpis scelerisque non. Nam tempor dui ut magna semper facilisis. Fusce quis est erat. Aenean egestas, tortor vitae sagittis vestibulum, ipsum eros vulputate eros, ut iaculis metus sem eu nunc. Sed mattis facilisis eleifend. Pellentesque odio ligula, aliquam vitae odio vitae, dictum molestie sem. Nullam dictum eros ut euismod egestas. Aenean pretium vulputate venenatis. Donec blandit, dolor nec fermentum laoreet, orci sapien semper turpis, id faucibus justo leo sit amet lectus. Etiam sollicitudin at leo a gravida. Phasellus pellentesque interdum nibh.</span></p>
<p style=\"text-align: center;\"><em><span style=\"font-family: 'Open Sans', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\"> In accumsan efficitur consectetur. Sed semper pharetra est nec finibus. Interdum et malesuada fames ac ante ipsum primis in faucibus. In hac habitasse platea dictumst.</span></em></p>
<p style=\"text-align: center;\"><span style=\"font-family: 'Open Sans', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\"><iframe src=\"https://www.youtube.com/embed/iUuKstAWof4\" width=\"560\" height=\"314\" allowfullscreen=\"allowfullscreen\"></iframe></span></p>
</body>
</html>"
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
      'description' => "<!DOCTYPE html>
<html>
<head>
</head>
<body>
<p><span style=\"font-family: 'Open Sans', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin laoreet imperdiet purus. Nulla facilisi. Pellentesque viverra, purus ac consectetur porta, sem tellus varius metus, vitae bibendum diam neque suscipit tellus. Praesent pharetra, tellus consectetur dictum lacinia, sapien lacus congue arcu, in porttitor elit orci et orci. Fusce in lacus in nulla tristique volutpat in ac turpis. Ut aliquam sem ipsum. Curabitur ac nisl tempor, lobortis metus at, pellentesque ipsum. Proin pretium, leo et efficitur hendrerit, ipsum diam semper leo, id pulvinar mi justo molestie purus. Curabitur imperdiet consectetur convallis. Curabitur mattis metus dolor, vel vestibulum libero interdum sit amet. Integer vel ex nisi. <strong>Vivamus vitae lorem ullamcorper sem pellentesque sollicitudin et at quam.</strong> Duis molestie rhoncus sapien id auctor. <strong>Nunc lobortis mi ut sapien laoreet, lobortis egestas nibh auctor. Phasellus sed ornare ipsum. Curabitur ultricies neque ut lectus ornare congue.</strong></span></p>
<p><span style=\"font-family: 'Open Sans', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\"><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"../../Uploads/Products/content/1590400004.jpg\" alt=\"\" width=\"700\" height=\"460\" /></span></p>
<p><span style=\"font-family: 'Open Sans', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">Proin ac sagittis magna. Fusce maximus sit amet ex sed laoreet. Aliquam cursus nibh ac mi lobortis interdum. Praesent luctus leo in facilisis ullamcorper. Aenean ante nibh, egestas nec lorem sed, hendrerit pharetra turpis. Aliquam non eros placerat, rhoncus augue a, gravida eros. Quisque maximus, metus et egestas lobortis, enim neque euismod massa, in ultrices quam felis in magna. Donec sed imperdiet ex. Ut vulputate vehicula elit eget placerat. Duis eros tortor, dictum vel lacinia eget, pellentesque quis purus.</span></p>
<p><span style=\"font-family: 'Open Sans', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\"><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"../../Uploads/Products/content/1590400048.jpg\" alt=\"\" width=\"700\" height=\"467\" /></span></p>
<p><span style=\"font-family: 'Open Sans', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">Ut vel consectetur dolor. Nunc maximus tincidunt lectus, non interdum turpis scelerisque non. Nam tempor dui ut magna semper facilisis. Fusce quis est erat. Aenean egestas, tortor vitae sagittis vestibulum, ipsum eros vulputate eros, ut iaculis metus sem eu nunc. Sed mattis facilisis eleifend. Pellentesque odio ligula, aliquam vitae odio vitae, dictum molestie sem. Nullam dictum eros ut euismod egestas. Aenean pretium vulputate venenatis. Donec blandit, dolor nec fermentum laoreet, orci sapien semper turpis, id faucibus justo leo sit amet lectus. Etiam sollicitudin at leo a gravida. Phasellus pellentesque interdum nibh.</span></p>
<p style=\"text-align: center;\"><em><span style=\"font-family: 'Open Sans', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\"> In accumsan efficitur consectetur. Sed semper pharetra est nec finibus. Interdum et malesuada fames ac ante ipsum primis in faucibus. In hac habitasse platea dictumst.</span></em></p>
<p style=\"text-align: center;\"><span style=\"font-family: 'Open Sans', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\"><iframe src=\"https://www.youtube.com/embed/iUuKstAWof4\" width=\"560\" height=\"314\" allowfullscreen=\"allowfullscreen\"></iframe></span></p>
</body>
</html>"
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
      'description' => "<!DOCTYPE html>
<html>
<head>
</head>
<body>
<p><span style=\"font-family: 'Open Sans', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin laoreet imperdiet purus. Nulla facilisi. Pellentesque viverra, purus ac consectetur porta, sem tellus varius metus, vitae bibendum diam neque suscipit tellus. Praesent pharetra, tellus consectetur dictum lacinia, sapien lacus congue arcu, in porttitor elit orci et orci. Fusce in lacus in nulla tristique volutpat in ac turpis. Ut aliquam sem ipsum. Curabitur ac nisl tempor, lobortis metus at, pellentesque ipsum. Proin pretium, leo et efficitur hendrerit, ipsum diam semper leo, id pulvinar mi justo molestie purus. Curabitur imperdiet consectetur convallis. Curabitur mattis metus dolor, vel vestibulum libero interdum sit amet. Integer vel ex nisi. <strong>Vivamus vitae lorem ullamcorper sem pellentesque sollicitudin et at quam.</strong> Duis molestie rhoncus sapien id auctor. <strong>Nunc lobortis mi ut sapien laoreet, lobortis egestas nibh auctor. Phasellus sed ornare ipsum. Curabitur ultricies neque ut lectus ornare congue.</strong></span></p>
<p><span style=\"font-family: 'Open Sans', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\"><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"../../Uploads/Products/content/1590400004.jpg\" alt=\"\" width=\"700\" height=\"460\" /></span></p>
<p><span style=\"font-family: 'Open Sans', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">Proin ac sagittis magna. Fusce maximus sit amet ex sed laoreet. Aliquam cursus nibh ac mi lobortis interdum. Praesent luctus leo in facilisis ullamcorper. Aenean ante nibh, egestas nec lorem sed, hendrerit pharetra turpis. Aliquam non eros placerat, rhoncus augue a, gravida eros. Quisque maximus, metus et egestas lobortis, enim neque euismod massa, in ultrices quam felis in magna. Donec sed imperdiet ex. Ut vulputate vehicula elit eget placerat. Duis eros tortor, dictum vel lacinia eget, pellentesque quis purus.</span></p>
<p><span style=\"font-family: 'Open Sans', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\"><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"../../Uploads/Products/content/1590400048.jpg\" alt=\"\" width=\"700\" height=\"467\" /></span></p>
<p><span style=\"font-family: 'Open Sans', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">Ut vel consectetur dolor. Nunc maximus tincidunt lectus, non interdum turpis scelerisque non. Nam tempor dui ut magna semper facilisis. Fusce quis est erat. Aenean egestas, tortor vitae sagittis vestibulum, ipsum eros vulputate eros, ut iaculis metus sem eu nunc. Sed mattis facilisis eleifend. Pellentesque odio ligula, aliquam vitae odio vitae, dictum molestie sem. Nullam dictum eros ut euismod egestas. Aenean pretium vulputate venenatis. Donec blandit, dolor nec fermentum laoreet, orci sapien semper turpis, id faucibus justo leo sit amet lectus. Etiam sollicitudin at leo a gravida. Phasellus pellentesque interdum nibh.</span></p>
<p style=\"text-align: center;\"><em><span style=\"font-family: 'Open Sans', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\"> In accumsan efficitur consectetur. Sed semper pharetra est nec finibus. Interdum et malesuada fames ac ante ipsum primis in faucibus. In hac habitasse platea dictumst.</span></em></p>
<p style=\"text-align: center;\"><span style=\"font-family: 'Open Sans', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\"><iframe src=\"https://www.youtube.com/embed/iUuKstAWof4\" width=\"560\" height=\"314\" allowfullscreen=\"allowfullscreen\"></iframe></span></p>
</body>
</html>"
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
      'description' => "<!DOCTYPE html>
<html>
<head>
</head>
<body>
<p><span style=\"font-family: 'Open Sans', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin laoreet imperdiet purus. Nulla facilisi. Pellentesque viverra, purus ac consectetur porta, sem tellus varius metus, vitae bibendum diam neque suscipit tellus. Praesent pharetra, tellus consectetur dictum lacinia, sapien lacus congue arcu, in porttitor elit orci et orci. Fusce in lacus in nulla tristique volutpat in ac turpis. Ut aliquam sem ipsum. Curabitur ac nisl tempor, lobortis metus at, pellentesque ipsum. Proin pretium, leo et efficitur hendrerit, ipsum diam semper leo, id pulvinar mi justo molestie purus. Curabitur imperdiet consectetur convallis. Curabitur mattis metus dolor, vel vestibulum libero interdum sit amet. Integer vel ex nisi. <strong>Vivamus vitae lorem ullamcorper sem pellentesque sollicitudin et at quam.</strong> Duis molestie rhoncus sapien id auctor. <strong>Nunc lobortis mi ut sapien laoreet, lobortis egestas nibh auctor. Phasellus sed ornare ipsum. Curabitur ultricies neque ut lectus ornare congue.</strong></span></p>
<p><span style=\"font-family: 'Open Sans', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\"><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"../../Uploads/Products/content/1590400004.jpg\" alt=\"\" width=\"700\" height=\"460\" /></span></p>
<p><span style=\"font-family: 'Open Sans', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">Proin ac sagittis magna. Fusce maximus sit amet ex sed laoreet. Aliquam cursus nibh ac mi lobortis interdum. Praesent luctus leo in facilisis ullamcorper. Aenean ante nibh, egestas nec lorem sed, hendrerit pharetra turpis. Aliquam non eros placerat, rhoncus augue a, gravida eros. Quisque maximus, metus et egestas lobortis, enim neque euismod massa, in ultrices quam felis in magna. Donec sed imperdiet ex. Ut vulputate vehicula elit eget placerat. Duis eros tortor, dictum vel lacinia eget, pellentesque quis purus.</span></p>
<p><span style=\"font-family: 'Open Sans', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\"><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"../../Uploads/Products/content/1590400048.jpg\" alt=\"\" width=\"700\" height=\"467\" /></span></p>
<p><span style=\"font-family: 'Open Sans', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">Ut vel consectetur dolor. Nunc maximus tincidunt lectus, non interdum turpis scelerisque non. Nam tempor dui ut magna semper facilisis. Fusce quis est erat. Aenean egestas, tortor vitae sagittis vestibulum, ipsum eros vulputate eros, ut iaculis metus sem eu nunc. Sed mattis facilisis eleifend. Pellentesque odio ligula, aliquam vitae odio vitae, dictum molestie sem. Nullam dictum eros ut euismod egestas. Aenean pretium vulputate venenatis. Donec blandit, dolor nec fermentum laoreet, orci sapien semper turpis, id faucibus justo leo sit amet lectus. Etiam sollicitudin at leo a gravida. Phasellus pellentesque interdum nibh.</span></p>
<p style=\"text-align: center;\"><em><span style=\"font-family: 'Open Sans', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\"> In accumsan efficitur consectetur. Sed semper pharetra est nec finibus. Interdum et malesuada fames ac ante ipsum primis in faucibus. In hac habitasse platea dictumst.</span></em></p>
<p style=\"text-align: center;\"><span style=\"font-family: 'Open Sans', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\"><iframe src=\"https://www.youtube.com/embed/iUuKstAWof4\" width=\"560\" height=\"314\" allowfullscreen=\"allowfullscreen\"></iframe></span></p>
</body>
</html>"
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
      'description' => "<!DOCTYPE html>
<html>
<head>
</head>
<body>
<p><span style=\"font-family: 'Open Sans', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin laoreet imperdiet purus. Nulla facilisi. Pellentesque viverra, purus ac consectetur porta, sem tellus varius metus, vitae bibendum diam neque suscipit tellus. Praesent pharetra, tellus consectetur dictum lacinia, sapien lacus congue arcu, in porttitor elit orci et orci. Fusce in lacus in nulla tristique volutpat in ac turpis. Ut aliquam sem ipsum. Curabitur ac nisl tempor, lobortis metus at, pellentesque ipsum. Proin pretium, leo et efficitur hendrerit, ipsum diam semper leo, id pulvinar mi justo molestie purus. Curabitur imperdiet consectetur convallis. Curabitur mattis metus dolor, vel vestibulum libero interdum sit amet. Integer vel ex nisi. <strong>Vivamus vitae lorem ullamcorper sem pellentesque sollicitudin et at quam.</strong> Duis molestie rhoncus sapien id auctor. <strong>Nunc lobortis mi ut sapien laoreet, lobortis egestas nibh auctor. Phasellus sed ornare ipsum. Curabitur ultricies neque ut lectus ornare congue.</strong></span></p>
<p><span style=\"font-family: 'Open Sans', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\"><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"../../Uploads/Products/content/1590400004.jpg\" alt=\"\" width=\"700\" height=\"460\" /></span></p>
<p><span style=\"font-family: 'Open Sans', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">Proin ac sagittis magna. Fusce maximus sit amet ex sed laoreet. Aliquam cursus nibh ac mi lobortis interdum. Praesent luctus leo in facilisis ullamcorper. Aenean ante nibh, egestas nec lorem sed, hendrerit pharetra turpis. Aliquam non eros placerat, rhoncus augue a, gravida eros. Quisque maximus, metus et egestas lobortis, enim neque euismod massa, in ultrices quam felis in magna. Donec sed imperdiet ex. Ut vulputate vehicula elit eget placerat. Duis eros tortor, dictum vel lacinia eget, pellentesque quis purus.</span></p>
<p><span style=\"font-family: 'Open Sans', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\"><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"../../Uploads/Products/content/1590400048.jpg\" alt=\"\" width=\"700\" height=\"467\" /></span></p>
<p><span style=\"font-family: 'Open Sans', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">Ut vel consectetur dolor. Nunc maximus tincidunt lectus, non interdum turpis scelerisque non. Nam tempor dui ut magna semper facilisis. Fusce quis est erat. Aenean egestas, tortor vitae sagittis vestibulum, ipsum eros vulputate eros, ut iaculis metus sem eu nunc. Sed mattis facilisis eleifend. Pellentesque odio ligula, aliquam vitae odio vitae, dictum molestie sem. Nullam dictum eros ut euismod egestas. Aenean pretium vulputate venenatis. Donec blandit, dolor nec fermentum laoreet, orci sapien semper turpis, id faucibus justo leo sit amet lectus. Etiam sollicitudin at leo a gravida. Phasellus pellentesque interdum nibh.</span></p>
<p style=\"text-align: center;\"><em><span style=\"font-family: 'Open Sans', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\"> In accumsan efficitur consectetur. Sed semper pharetra est nec finibus. Interdum et malesuada fames ac ante ipsum primis in faucibus. In hac habitasse platea dictumst.</span></em></p>
<p style=\"text-align: center;\"><span style=\"font-family: 'Open Sans', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\"><iframe src=\"https://www.youtube.com/embed/iUuKstAWof4\" width=\"560\" height=\"314\" allowfullscreen=\"allowfullscreen\"></iframe></span></p>
</body>
</html>"
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
      'description' => "<!DOCTYPE html>
<html>
<head>
</head>
<body>
<p><span style=\"font-family: 'Open Sans', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin laoreet imperdiet purus. Nulla facilisi. Pellentesque viverra, purus ac consectetur porta, sem tellus varius metus, vitae bibendum diam neque suscipit tellus. Praesent pharetra, tellus consectetur dictum lacinia, sapien lacus congue arcu, in porttitor elit orci et orci. Fusce in lacus in nulla tristique volutpat in ac turpis. Ut aliquam sem ipsum. Curabitur ac nisl tempor, lobortis metus at, pellentesque ipsum. Proin pretium, leo et efficitur hendrerit, ipsum diam semper leo, id pulvinar mi justo molestie purus. Curabitur imperdiet consectetur convallis. Curabitur mattis metus dolor, vel vestibulum libero interdum sit amet. Integer vel ex nisi. <strong>Vivamus vitae lorem ullamcorper sem pellentesque sollicitudin et at quam.</strong> Duis molestie rhoncus sapien id auctor. <strong>Nunc lobortis mi ut sapien laoreet, lobortis egestas nibh auctor. Phasellus sed ornare ipsum. Curabitur ultricies neque ut lectus ornare congue.</strong></span></p>
<p><span style=\"font-family: 'Open Sans', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\"><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"../../Uploads/Products/content/1590400004.jpg\" alt=\"\" width=\"700\" height=\"460\" /></span></p>
<p><span style=\"font-family: 'Open Sans', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">Proin ac sagittis magna. Fusce maximus sit amet ex sed laoreet. Aliquam cursus nibh ac mi lobortis interdum. Praesent luctus leo in facilisis ullamcorper. Aenean ante nibh, egestas nec lorem sed, hendrerit pharetra turpis. Aliquam non eros placerat, rhoncus augue a, gravida eros. Quisque maximus, metus et egestas lobortis, enim neque euismod massa, in ultrices quam felis in magna. Donec sed imperdiet ex. Ut vulputate vehicula elit eget placerat. Duis eros tortor, dictum vel lacinia eget, pellentesque quis purus.</span></p>
<p><span style=\"font-family: 'Open Sans', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\"><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"../../Uploads/Products/content/1590400048.jpg\" alt=\"\" width=\"700\" height=\"467\" /></span></p>
<p><span style=\"font-family: 'Open Sans', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">Ut vel consectetur dolor. Nunc maximus tincidunt lectus, non interdum turpis scelerisque non. Nam tempor dui ut magna semper facilisis. Fusce quis est erat. Aenean egestas, tortor vitae sagittis vestibulum, ipsum eros vulputate eros, ut iaculis metus sem eu nunc. Sed mattis facilisis eleifend. Pellentesque odio ligula, aliquam vitae odio vitae, dictum molestie sem. Nullam dictum eros ut euismod egestas. Aenean pretium vulputate venenatis. Donec blandit, dolor nec fermentum laoreet, orci sapien semper turpis, id faucibus justo leo sit amet lectus. Etiam sollicitudin at leo a gravida. Phasellus pellentesque interdum nibh.</span></p>
<p style=\"text-align: center;\"><em><span style=\"font-family: 'Open Sans', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\"> In accumsan efficitur consectetur. Sed semper pharetra est nec finibus. Interdum et malesuada fames ac ante ipsum primis in faucibus. In hac habitasse platea dictumst.</span></em></p>
<p style=\"text-align: center;\"><span style=\"font-family: 'Open Sans', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\"><iframe src=\"https://www.youtube.com/embed/iUuKstAWof4\" width=\"560\" height=\"314\" allowfullscreen=\"allowfullscreen\"></iframe></span></p>
</body>
</html>"
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
      'description' => "<!DOCTYPE html>
<html>
<head>
</head>
<body>
<p><span style=\"font-family: 'Open Sans', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin laoreet imperdiet purus. Nulla facilisi. Pellentesque viverra, purus ac consectetur porta, sem tellus varius metus, vitae bibendum diam neque suscipit tellus. Praesent pharetra, tellus consectetur dictum lacinia, sapien lacus congue arcu, in porttitor elit orci et orci. Fusce in lacus in nulla tristique volutpat in ac turpis. Ut aliquam sem ipsum. Curabitur ac nisl tempor, lobortis metus at, pellentesque ipsum. Proin pretium, leo et efficitur hendrerit, ipsum diam semper leo, id pulvinar mi justo molestie purus. Curabitur imperdiet consectetur convallis. Curabitur mattis metus dolor, vel vestibulum libero interdum sit amet. Integer vel ex nisi. <strong>Vivamus vitae lorem ullamcorper sem pellentesque sollicitudin et at quam.</strong> Duis molestie rhoncus sapien id auctor. <strong>Nunc lobortis mi ut sapien laoreet, lobortis egestas nibh auctor. Phasellus sed ornare ipsum. Curabitur ultricies neque ut lectus ornare congue.</strong></span></p>
<p><span style=\"font-family: 'Open Sans', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\"><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"../../Uploads/Products/content/1590400004.jpg\" alt=\"\" width=\"700\" height=\"460\" /></span></p>
<p><span style=\"font-family: 'Open Sans', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">Proin ac sagittis magna. Fusce maximus sit amet ex sed laoreet. Aliquam cursus nibh ac mi lobortis interdum. Praesent luctus leo in facilisis ullamcorper. Aenean ante nibh, egestas nec lorem sed, hendrerit pharetra turpis. Aliquam non eros placerat, rhoncus augue a, gravida eros. Quisque maximus, metus et egestas lobortis, enim neque euismod massa, in ultrices quam felis in magna. Donec sed imperdiet ex. Ut vulputate vehicula elit eget placerat. Duis eros tortor, dictum vel lacinia eget, pellentesque quis purus.</span></p>
<p><span style=\"font-family: 'Open Sans', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\"><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"../../Uploads/Products/content/1590400048.jpg\" alt=\"\" width=\"700\" height=\"467\" /></span></p>
<p><span style=\"font-family: 'Open Sans', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">Ut vel consectetur dolor. Nunc maximus tincidunt lectus, non interdum turpis scelerisque non. Nam tempor dui ut magna semper facilisis. Fusce quis est erat. Aenean egestas, tortor vitae sagittis vestibulum, ipsum eros vulputate eros, ut iaculis metus sem eu nunc. Sed mattis facilisis eleifend. Pellentesque odio ligula, aliquam vitae odio vitae, dictum molestie sem. Nullam dictum eros ut euismod egestas. Aenean pretium vulputate venenatis. Donec blandit, dolor nec fermentum laoreet, orci sapien semper turpis, id faucibus justo leo sit amet lectus. Etiam sollicitudin at leo a gravida. Phasellus pellentesque interdum nibh.</span></p>
<p style=\"text-align: center;\"><em><span style=\"font-family: 'Open Sans', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\"> In accumsan efficitur consectetur. Sed semper pharetra est nec finibus. Interdum et malesuada fames ac ante ipsum primis in faucibus. In hac habitasse platea dictumst.</span></em></p>
<p style=\"text-align: center;\"><span style=\"font-family: 'Open Sans', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\"><iframe src=\"https://www.youtube.com/embed/iUuKstAWof4\" width=\"560\" height=\"314\" allowfullscreen=\"allowfullscreen\"></iframe></span></p>
</body>
</html>"
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
      'description' => "<!DOCTYPE html>
<html>
<head>
</head>
<body>
<p><span style=\"font-family: 'Open Sans', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin laoreet imperdiet purus. Nulla facilisi. Pellentesque viverra, purus ac consectetur porta, sem tellus varius metus, vitae bibendum diam neque suscipit tellus. Praesent pharetra, tellus consectetur dictum lacinia, sapien lacus congue arcu, in porttitor elit orci et orci. Fusce in lacus in nulla tristique volutpat in ac turpis. Ut aliquam sem ipsum. Curabitur ac nisl tempor, lobortis metus at, pellentesque ipsum. Proin pretium, leo et efficitur hendrerit, ipsum diam semper leo, id pulvinar mi justo molestie purus. Curabitur imperdiet consectetur convallis. Curabitur mattis metus dolor, vel vestibulum libero interdum sit amet. Integer vel ex nisi. <strong>Vivamus vitae lorem ullamcorper sem pellentesque sollicitudin et at quam.</strong> Duis molestie rhoncus sapien id auctor. <strong>Nunc lobortis mi ut sapien laoreet, lobortis egestas nibh auctor. Phasellus sed ornare ipsum. Curabitur ultricies neque ut lectus ornare congue.</strong></span></p>
<p><span style=\"font-family: 'Open Sans', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\"><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"../../Uploads/Products/content/1590400004.jpg\" alt=\"\" width=\"700\" height=\"460\" /></span></p>
<p><span style=\"font-family: 'Open Sans', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">Proin ac sagittis magna. Fusce maximus sit amet ex sed laoreet. Aliquam cursus nibh ac mi lobortis interdum. Praesent luctus leo in facilisis ullamcorper. Aenean ante nibh, egestas nec lorem sed, hendrerit pharetra turpis. Aliquam non eros placerat, rhoncus augue a, gravida eros. Quisque maximus, metus et egestas lobortis, enim neque euismod massa, in ultrices quam felis in magna. Donec sed imperdiet ex. Ut vulputate vehicula elit eget placerat. Duis eros tortor, dictum vel lacinia eget, pellentesque quis purus.</span></p>
<p><span style=\"font-family: 'Open Sans', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\"><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"../../Uploads/Products/content/1590400048.jpg\" alt=\"\" width=\"700\" height=\"467\" /></span></p>
<p><span style=\"font-family: 'Open Sans', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">Ut vel consectetur dolor. Nunc maximus tincidunt lectus, non interdum turpis scelerisque non. Nam tempor dui ut magna semper facilisis. Fusce quis est erat. Aenean egestas, tortor vitae sagittis vestibulum, ipsum eros vulputate eros, ut iaculis metus sem eu nunc. Sed mattis facilisis eleifend. Pellentesque odio ligula, aliquam vitae odio vitae, dictum molestie sem. Nullam dictum eros ut euismod egestas. Aenean pretium vulputate venenatis. Donec blandit, dolor nec fermentum laoreet, orci sapien semper turpis, id faucibus justo leo sit amet lectus. Etiam sollicitudin at leo a gravida. Phasellus pellentesque interdum nibh.</span></p>
<p style=\"text-align: center;\"><em><span style=\"font-family: 'Open Sans', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\"> In accumsan efficitur consectetur. Sed semper pharetra est nec finibus. Interdum et malesuada fames ac ante ipsum primis in faucibus. In hac habitasse platea dictumst.</span></em></p>
<p style=\"text-align: center;\"><span style=\"font-family: 'Open Sans', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\"><iframe src=\"https://www.youtube.com/embed/iUuKstAWof4\" width=\"560\" height=\"314\" allowfullscreen=\"allowfullscreen\"></iframe></span></p>
</body>
</html>"
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
      'description' => "<!DOCTYPE html>
<html>
<head>
</head>
<body>
<p><span style=\"font-family: 'Open Sans', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin laoreet imperdiet purus. Nulla facilisi. Pellentesque viverra, purus ac consectetur porta, sem tellus varius metus, vitae bibendum diam neque suscipit tellus. Praesent pharetra, tellus consectetur dictum lacinia, sapien lacus congue arcu, in porttitor elit orci et orci. Fusce in lacus in nulla tristique volutpat in ac turpis. Ut aliquam sem ipsum. Curabitur ac nisl tempor, lobortis metus at, pellentesque ipsum. Proin pretium, leo et efficitur hendrerit, ipsum diam semper leo, id pulvinar mi justo molestie purus. Curabitur imperdiet consectetur convallis. Curabitur mattis metus dolor, vel vestibulum libero interdum sit amet. Integer vel ex nisi. <strong>Vivamus vitae lorem ullamcorper sem pellentesque sollicitudin et at quam.</strong> Duis molestie rhoncus sapien id auctor. <strong>Nunc lobortis mi ut sapien laoreet, lobortis egestas nibh auctor. Phasellus sed ornare ipsum. Curabitur ultricies neque ut lectus ornare congue.</strong></span></p>
<p><span style=\"font-family: 'Open Sans', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\"><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"../../Uploads/Products/content/1590400004.jpg\" alt=\"\" width=\"700\" height=\"460\" /></span></p>
<p><span style=\"font-family: 'Open Sans', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">Proin ac sagittis magna. Fusce maximus sit amet ex sed laoreet. Aliquam cursus nibh ac mi lobortis interdum. Praesent luctus leo in facilisis ullamcorper. Aenean ante nibh, egestas nec lorem sed, hendrerit pharetra turpis. Aliquam non eros placerat, rhoncus augue a, gravida eros. Quisque maximus, metus et egestas lobortis, enim neque euismod massa, in ultrices quam felis in magna. Donec sed imperdiet ex. Ut vulputate vehicula elit eget placerat. Duis eros tortor, dictum vel lacinia eget, pellentesque quis purus.</span></p>
<p><span style=\"font-family: 'Open Sans', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\"><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"../../Uploads/Products/content/1590400048.jpg\" alt=\"\" width=\"700\" height=\"467\" /></span></p>
<p><span style=\"font-family: 'Open Sans', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">Ut vel consectetur dolor. Nunc maximus tincidunt lectus, non interdum turpis scelerisque non. Nam tempor dui ut magna semper facilisis. Fusce quis est erat. Aenean egestas, tortor vitae sagittis vestibulum, ipsum eros vulputate eros, ut iaculis metus sem eu nunc. Sed mattis facilisis eleifend. Pellentesque odio ligula, aliquam vitae odio vitae, dictum molestie sem. Nullam dictum eros ut euismod egestas. Aenean pretium vulputate venenatis. Donec blandit, dolor nec fermentum laoreet, orci sapien semper turpis, id faucibus justo leo sit amet lectus. Etiam sollicitudin at leo a gravida. Phasellus pellentesque interdum nibh.</span></p>
<p style=\"text-align: center;\"><em><span style=\"font-family: 'Open Sans', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\"> In accumsan efficitur consectetur. Sed semper pharetra est nec finibus. Interdum et malesuada fames ac ante ipsum primis in faucibus. In hac habitasse platea dictumst.</span></em></p>
<p style=\"text-align: center;\"><span style=\"font-family: 'Open Sans', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\"><iframe src=\"https://www.youtube.com/embed/iUuKstAWof4\" width=\"560\" height=\"314\" allowfullscreen=\"allowfullscreen\"></iframe></span></p>
</body>
</html>"
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
      'description' => "<!DOCTYPE html>
<html>
<head>
</head>
<body>
<p><span style=\"font-family: 'Open Sans', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin laoreet imperdiet purus. Nulla facilisi. Pellentesque viverra, purus ac consectetur porta, sem tellus varius metus, vitae bibendum diam neque suscipit tellus. Praesent pharetra, tellus consectetur dictum lacinia, sapien lacus congue arcu, in porttitor elit orci et orci. Fusce in lacus in nulla tristique volutpat in ac turpis. Ut aliquam sem ipsum. Curabitur ac nisl tempor, lobortis metus at, pellentesque ipsum. Proin pretium, leo et efficitur hendrerit, ipsum diam semper leo, id pulvinar mi justo molestie purus. Curabitur imperdiet consectetur convallis. Curabitur mattis metus dolor, vel vestibulum libero interdum sit amet. Integer vel ex nisi. <strong>Vivamus vitae lorem ullamcorper sem pellentesque sollicitudin et at quam.</strong> Duis molestie rhoncus sapien id auctor. <strong>Nunc lobortis mi ut sapien laoreet, lobortis egestas nibh auctor. Phasellus sed ornare ipsum. Curabitur ultricies neque ut lectus ornare congue.</strong></span></p>
<p><span style=\"font-family: 'Open Sans', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\"><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"../../Uploads/Products/content/1590400004.jpg\" alt=\"\" width=\"700\" height=\"460\" /></span></p>
<p><span style=\"font-family: 'Open Sans', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">Proin ac sagittis magna. Fusce maximus sit amet ex sed laoreet. Aliquam cursus nibh ac mi lobortis interdum. Praesent luctus leo in facilisis ullamcorper. Aenean ante nibh, egestas nec lorem sed, hendrerit pharetra turpis. Aliquam non eros placerat, rhoncus augue a, gravida eros. Quisque maximus, metus et egestas lobortis, enim neque euismod massa, in ultrices quam felis in magna. Donec sed imperdiet ex. Ut vulputate vehicula elit eget placerat. Duis eros tortor, dictum vel lacinia eget, pellentesque quis purus.</span></p>
<p><span style=\"font-family: 'Open Sans', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\"><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"../../Uploads/Products/content/1590400048.jpg\" alt=\"\" width=\"700\" height=\"467\" /></span></p>
<p><span style=\"font-family: 'Open Sans', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">Ut vel consectetur dolor. Nunc maximus tincidunt lectus, non interdum turpis scelerisque non. Nam tempor dui ut magna semper facilisis. Fusce quis est erat. Aenean egestas, tortor vitae sagittis vestibulum, ipsum eros vulputate eros, ut iaculis metus sem eu nunc. Sed mattis facilisis eleifend. Pellentesque odio ligula, aliquam vitae odio vitae, dictum molestie sem. Nullam dictum eros ut euismod egestas. Aenean pretium vulputate venenatis. Donec blandit, dolor nec fermentum laoreet, orci sapien semper turpis, id faucibus justo leo sit amet lectus. Etiam sollicitudin at leo a gravida. Phasellus pellentesque interdum nibh.</span></p>
<p style=\"text-align: center;\"><em><span style=\"font-family: 'Open Sans', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\"> In accumsan efficitur consectetur. Sed semper pharetra est nec finibus. Interdum et malesuada fames ac ante ipsum primis in faucibus. In hac habitasse platea dictumst.</span></em></p>
<p style=\"text-align: center;\"><span style=\"font-family: 'Open Sans', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\"><iframe src=\"https://www.youtube.com/embed/iUuKstAWof4\" width=\"560\" height=\"314\" allowfullscreen=\"allowfullscreen\"></iframe></span></p>
</body>
</html>"
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
      'description' => "<!DOCTYPE html>
<html>
<head>
</head>
<body>
<p><span style=\"font-family: 'Open Sans', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin laoreet imperdiet purus. Nulla facilisi. Pellentesque viverra, purus ac consectetur porta, sem tellus varius metus, vitae bibendum diam neque suscipit tellus. Praesent pharetra, tellus consectetur dictum lacinia, sapien lacus congue arcu, in porttitor elit orci et orci. Fusce in lacus in nulla tristique volutpat in ac turpis. Ut aliquam sem ipsum. Curabitur ac nisl tempor, lobortis metus at, pellentesque ipsum. Proin pretium, leo et efficitur hendrerit, ipsum diam semper leo, id pulvinar mi justo molestie purus. Curabitur imperdiet consectetur convallis. Curabitur mattis metus dolor, vel vestibulum libero interdum sit amet. Integer vel ex nisi. <strong>Vivamus vitae lorem ullamcorper sem pellentesque sollicitudin et at quam.</strong> Duis molestie rhoncus sapien id auctor. <strong>Nunc lobortis mi ut sapien laoreet, lobortis egestas nibh auctor. Phasellus sed ornare ipsum. Curabitur ultricies neque ut lectus ornare congue.</strong></span></p>
<p><span style=\"font-family: 'Open Sans', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\"><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"../../Uploads/Products/content/1590400004.jpg\" alt=\"\" width=\"700\" height=\"460\" /></span></p>
<p><span style=\"font-family: 'Open Sans', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">Proin ac sagittis magna. Fusce maximus sit amet ex sed laoreet. Aliquam cursus nibh ac mi lobortis interdum. Praesent luctus leo in facilisis ullamcorper. Aenean ante nibh, egestas nec lorem sed, hendrerit pharetra turpis. Aliquam non eros placerat, rhoncus augue a, gravida eros. Quisque maximus, metus et egestas lobortis, enim neque euismod massa, in ultrices quam felis in magna. Donec sed imperdiet ex. Ut vulputate vehicula elit eget placerat. Duis eros tortor, dictum vel lacinia eget, pellentesque quis purus.</span></p>
<p><span style=\"font-family: 'Open Sans', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\"><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"../../Uploads/Products/content/1590400048.jpg\" alt=\"\" width=\"700\" height=\"467\" /></span></p>
<p><span style=\"font-family: 'Open Sans', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">Ut vel consectetur dolor. Nunc maximus tincidunt lectus, non interdum turpis scelerisque non. Nam tempor dui ut magna semper facilisis. Fusce quis est erat. Aenean egestas, tortor vitae sagittis vestibulum, ipsum eros vulputate eros, ut iaculis metus sem eu nunc. Sed mattis facilisis eleifend. Pellentesque odio ligula, aliquam vitae odio vitae, dictum molestie sem. Nullam dictum eros ut euismod egestas. Aenean pretium vulputate venenatis. Donec blandit, dolor nec fermentum laoreet, orci sapien semper turpis, id faucibus justo leo sit amet lectus. Etiam sollicitudin at leo a gravida. Phasellus pellentesque interdum nibh.</span></p>
<p style=\"text-align: center;\"><em><span style=\"font-family: 'Open Sans', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\"> In accumsan efficitur consectetur. Sed semper pharetra est nec finibus. Interdum et malesuada fames ac ante ipsum primis in faucibus. In hac habitasse platea dictumst.</span></em></p>
<p style=\"text-align: center;\"><span style=\"font-family: 'Open Sans', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\"><iframe src=\"https://www.youtube.com/embed/iUuKstAWof4\" width=\"560\" height=\"314\" allowfullscreen=\"allowfullscreen\"></iframe></span></p>
</body>
</html>"
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
      'volume_unit_id' => 14,
      'description' => "<!DOCTYPE html>
<html>
<head>
</head>
<body>
<p><span style=\"font-family: 'Open Sans', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin laoreet imperdiet purus. Nulla facilisi. Pellentesque viverra, purus ac consectetur porta, sem tellus varius metus, vitae bibendum diam neque suscipit tellus. Praesent pharetra, tellus consectetur dictum lacinia, sapien lacus congue arcu, in porttitor elit orci et orci. Fusce in lacus in nulla tristique volutpat in ac turpis. Ut aliquam sem ipsum. Curabitur ac nisl tempor, lobortis metus at, pellentesque ipsum. Proin pretium, leo et efficitur hendrerit, ipsum diam semper leo, id pulvinar mi justo molestie purus. Curabitur imperdiet consectetur convallis. Curabitur mattis metus dolor, vel vestibulum libero interdum sit amet. Integer vel ex nisi. <strong>Vivamus vitae lorem ullamcorper sem pellentesque sollicitudin et at quam.</strong> Duis molestie rhoncus sapien id auctor. <strong>Nunc lobortis mi ut sapien laoreet, lobortis egestas nibh auctor. Phasellus sed ornare ipsum. Curabitur ultricies neque ut lectus ornare congue.</strong></span></p>
<p><span style=\"font-family: 'Open Sans', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\"><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"../../Uploads/Products/content/1590400004.jpg\" alt=\"\" width=\"700\" height=\"460\" /></span></p>
<p><span style=\"font-family: 'Open Sans', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">Proin ac sagittis magna. Fusce maximus sit amet ex sed laoreet. Aliquam cursus nibh ac mi lobortis interdum. Praesent luctus leo in facilisis ullamcorper. Aenean ante nibh, egestas nec lorem sed, hendrerit pharetra turpis. Aliquam non eros placerat, rhoncus augue a, gravida eros. Quisque maximus, metus et egestas lobortis, enim neque euismod massa, in ultrices quam felis in magna. Donec sed imperdiet ex. Ut vulputate vehicula elit eget placerat. Duis eros tortor, dictum vel lacinia eget, pellentesque quis purus.</span></p>
<p><span style=\"font-family: 'Open Sans', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\"><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"../../Uploads/Products/content/1590400048.jpg\" alt=\"\" width=\"700\" height=\"467\" /></span></p>
<p><span style=\"font-family: 'Open Sans', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">Ut vel consectetur dolor. Nunc maximus tincidunt lectus, non interdum turpis scelerisque non. Nam tempor dui ut magna semper facilisis. Fusce quis est erat. Aenean egestas, tortor vitae sagittis vestibulum, ipsum eros vulputate eros, ut iaculis metus sem eu nunc. Sed mattis facilisis eleifend. Pellentesque odio ligula, aliquam vitae odio vitae, dictum molestie sem. Nullam dictum eros ut euismod egestas. Aenean pretium vulputate venenatis. Donec blandit, dolor nec fermentum laoreet, orci sapien semper turpis, id faucibus justo leo sit amet lectus. Etiam sollicitudin at leo a gravida. Phasellus pellentesque interdum nibh.</span></p>
<p style=\"text-align: center;\"><em><span style=\"font-family: 'Open Sans', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\"> In accumsan efficitur consectetur. Sed semper pharetra est nec finibus. Interdum et malesuada fames ac ante ipsum primis in faucibus. In hac habitasse platea dictumst.</span></em></p>
<p style=\"text-align: center;\"><span style=\"font-family: 'Open Sans', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\"><iframe src=\"https://www.youtube.com/embed/iUuKstAWof4\" width=\"560\" height=\"314\" allowfullscreen=\"allowfullscreen\"></iframe></span></p>
</body>
</html>"
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
      'volume_unit_id' => 14,
      'description' => "<!DOCTYPE html>
<html>
<head>
</head>
<body>
<p><span style=\"font-family: 'Open Sans', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin laoreet imperdiet purus. Nulla facilisi. Pellentesque viverra, purus ac consectetur porta, sem tellus varius metus, vitae bibendum diam neque suscipit tellus. Praesent pharetra, tellus consectetur dictum lacinia, sapien lacus congue arcu, in porttitor elit orci et orci. Fusce in lacus in nulla tristique volutpat in ac turpis. Ut aliquam sem ipsum. Curabitur ac nisl tempor, lobortis metus at, pellentesque ipsum. Proin pretium, leo et efficitur hendrerit, ipsum diam semper leo, id pulvinar mi justo molestie purus. Curabitur imperdiet consectetur convallis. Curabitur mattis metus dolor, vel vestibulum libero interdum sit amet. Integer vel ex nisi. <strong>Vivamus vitae lorem ullamcorper sem pellentesque sollicitudin et at quam.</strong> Duis molestie rhoncus sapien id auctor. <strong>Nunc lobortis mi ut sapien laoreet, lobortis egestas nibh auctor. Phasellus sed ornare ipsum. Curabitur ultricies neque ut lectus ornare congue.</strong></span></p>
<p><span style=\"font-family: 'Open Sans', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\"><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"../../Uploads/Products/content/1590400004.jpg\" alt=\"\" width=\"700\" height=\"460\" /></span></p>
<p><span style=\"font-family: 'Open Sans', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">Proin ac sagittis magna. Fusce maximus sit amet ex sed laoreet. Aliquam cursus nibh ac mi lobortis interdum. Praesent luctus leo in facilisis ullamcorper. Aenean ante nibh, egestas nec lorem sed, hendrerit pharetra turpis. Aliquam non eros placerat, rhoncus augue a, gravida eros. Quisque maximus, metus et egestas lobortis, enim neque euismod massa, in ultrices quam felis in magna. Donec sed imperdiet ex. Ut vulputate vehicula elit eget placerat. Duis eros tortor, dictum vel lacinia eget, pellentesque quis purus.</span></p>
<p><span style=\"font-family: 'Open Sans', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\"><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"../../Uploads/Products/content/1590400048.jpg\" alt=\"\" width=\"700\" height=\"467\" /></span></p>
<p><span style=\"font-family: 'Open Sans', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">Ut vel consectetur dolor. Nunc maximus tincidunt lectus, non interdum turpis scelerisque non. Nam tempor dui ut magna semper facilisis. Fusce quis est erat. Aenean egestas, tortor vitae sagittis vestibulum, ipsum eros vulputate eros, ut iaculis metus sem eu nunc. Sed mattis facilisis eleifend. Pellentesque odio ligula, aliquam vitae odio vitae, dictum molestie sem. Nullam dictum eros ut euismod egestas. Aenean pretium vulputate venenatis. Donec blandit, dolor nec fermentum laoreet, orci sapien semper turpis, id faucibus justo leo sit amet lectus. Etiam sollicitudin at leo a gravida. Phasellus pellentesque interdum nibh.</span></p>
<p style=\"text-align: center;\"><em><span style=\"font-family: 'Open Sans', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\"> In accumsan efficitur consectetur. Sed semper pharetra est nec finibus. Interdum et malesuada fames ac ante ipsum primis in faucibus. In hac habitasse platea dictumst.</span></em></p>
<p style=\"text-align: center;\"><span style=\"font-family: 'Open Sans', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\"><iframe src=\"https://www.youtube.com/embed/iUuKstAWof4\" width=\"560\" height=\"314\" allowfullscreen=\"allowfullscreen\"></iframe></span></p>
</body>
</html>"
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
      'volume_unit_id' => 14,
      'description' => "<!DOCTYPE html>
<html>
<head>
</head>
<body>
<p><span style=\"font-family: 'Open Sans', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin laoreet imperdiet purus. Nulla facilisi. Pellentesque viverra, purus ac consectetur porta, sem tellus varius metus, vitae bibendum diam neque suscipit tellus. Praesent pharetra, tellus consectetur dictum lacinia, sapien lacus congue arcu, in porttitor elit orci et orci. Fusce in lacus in nulla tristique volutpat in ac turpis. Ut aliquam sem ipsum. Curabitur ac nisl tempor, lobortis metus at, pellentesque ipsum. Proin pretium, leo et efficitur hendrerit, ipsum diam semper leo, id pulvinar mi justo molestie purus. Curabitur imperdiet consectetur convallis. Curabitur mattis metus dolor, vel vestibulum libero interdum sit amet. Integer vel ex nisi. <strong>Vivamus vitae lorem ullamcorper sem pellentesque sollicitudin et at quam.</strong> Duis molestie rhoncus sapien id auctor. <strong>Nunc lobortis mi ut sapien laoreet, lobortis egestas nibh auctor. Phasellus sed ornare ipsum. Curabitur ultricies neque ut lectus ornare congue.</strong></span></p>
<p><span style=\"font-family: 'Open Sans', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\"><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"../../Uploads/Products/content/1590400004.jpg\" alt=\"\" width=\"700\" height=\"460\" /></span></p>
<p><span style=\"font-family: 'Open Sans', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">Proin ac sagittis magna. Fusce maximus sit amet ex sed laoreet. Aliquam cursus nibh ac mi lobortis interdum. Praesent luctus leo in facilisis ullamcorper. Aenean ante nibh, egestas nec lorem sed, hendrerit pharetra turpis. Aliquam non eros placerat, rhoncus augue a, gravida eros. Quisque maximus, metus et egestas lobortis, enim neque euismod massa, in ultrices quam felis in magna. Donec sed imperdiet ex. Ut vulputate vehicula elit eget placerat. Duis eros tortor, dictum vel lacinia eget, pellentesque quis purus.</span></p>
<p><span style=\"font-family: 'Open Sans', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\"><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"../../Uploads/Products/content/1590400048.jpg\" alt=\"\" width=\"700\" height=\"467\" /></span></p>
<p><span style=\"font-family: 'Open Sans', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">Ut vel consectetur dolor. Nunc maximus tincidunt lectus, non interdum turpis scelerisque non. Nam tempor dui ut magna semper facilisis. Fusce quis est erat. Aenean egestas, tortor vitae sagittis vestibulum, ipsum eros vulputate eros, ut iaculis metus sem eu nunc. Sed mattis facilisis eleifend. Pellentesque odio ligula, aliquam vitae odio vitae, dictum molestie sem. Nullam dictum eros ut euismod egestas. Aenean pretium vulputate venenatis. Donec blandit, dolor nec fermentum laoreet, orci sapien semper turpis, id faucibus justo leo sit amet lectus. Etiam sollicitudin at leo a gravida. Phasellus pellentesque interdum nibh.</span></p>
<p style=\"text-align: center;\"><em><span style=\"font-family: 'Open Sans', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\"> In accumsan efficitur consectetur. Sed semper pharetra est nec finibus. Interdum et malesuada fames ac ante ipsum primis in faucibus. In hac habitasse platea dictumst.</span></em></p>
<p style=\"text-align: center;\"><span style=\"font-family: 'Open Sans', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\"><iframe src=\"https://www.youtube.com/embed/iUuKstAWof4\" width=\"560\" height=\"314\" allowfullscreen=\"allowfullscreen\"></iframe></span></p>
</body>
</html>"
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
      'volume_unit_id' => 14,
      'description' => "<!DOCTYPE html>
<html>
<head>
</head>
<body>
<p><span style=\"font-family: 'Open Sans', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin laoreet imperdiet purus. Nulla facilisi. Pellentesque viverra, purus ac consectetur porta, sem tellus varius metus, vitae bibendum diam neque suscipit tellus. Praesent pharetra, tellus consectetur dictum lacinia, sapien lacus congue arcu, in porttitor elit orci et orci. Fusce in lacus in nulla tristique volutpat in ac turpis. Ut aliquam sem ipsum. Curabitur ac nisl tempor, lobortis metus at, pellentesque ipsum. Proin pretium, leo et efficitur hendrerit, ipsum diam semper leo, id pulvinar mi justo molestie purus. Curabitur imperdiet consectetur convallis. Curabitur mattis metus dolor, vel vestibulum libero interdum sit amet. Integer vel ex nisi. <strong>Vivamus vitae lorem ullamcorper sem pellentesque sollicitudin et at quam.</strong> Duis molestie rhoncus sapien id auctor. <strong>Nunc lobortis mi ut sapien laoreet, lobortis egestas nibh auctor. Phasellus sed ornare ipsum. Curabitur ultricies neque ut lectus ornare congue.</strong></span></p>
<p><span style=\"font-family: 'Open Sans', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\"><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"../../Uploads/Products/content/1590400004.jpg\" alt=\"\" width=\"700\" height=\"460\" /></span></p>
<p><span style=\"font-family: 'Open Sans', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">Proin ac sagittis magna. Fusce maximus sit amet ex sed laoreet. Aliquam cursus nibh ac mi lobortis interdum. Praesent luctus leo in facilisis ullamcorper. Aenean ante nibh, egestas nec lorem sed, hendrerit pharetra turpis. Aliquam non eros placerat, rhoncus augue a, gravida eros. Quisque maximus, metus et egestas lobortis, enim neque euismod massa, in ultrices quam felis in magna. Donec sed imperdiet ex. Ut vulputate vehicula elit eget placerat. Duis eros tortor, dictum vel lacinia eget, pellentesque quis purus.</span></p>
<p><span style=\"font-family: 'Open Sans', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\"><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"../../Uploads/Products/content/1590400048.jpg\" alt=\"\" width=\"700\" height=\"467\" /></span></p>
<p><span style=\"font-family: 'Open Sans', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">Ut vel consectetur dolor. Nunc maximus tincidunt lectus, non interdum turpis scelerisque non. Nam tempor dui ut magna semper facilisis. Fusce quis est erat. Aenean egestas, tortor vitae sagittis vestibulum, ipsum eros vulputate eros, ut iaculis metus sem eu nunc. Sed mattis facilisis eleifend. Pellentesque odio ligula, aliquam vitae odio vitae, dictum molestie sem. Nullam dictum eros ut euismod egestas. Aenean pretium vulputate venenatis. Donec blandit, dolor nec fermentum laoreet, orci sapien semper turpis, id faucibus justo leo sit amet lectus. Etiam sollicitudin at leo a gravida. Phasellus pellentesque interdum nibh.</span></p>
<p style=\"text-align: center;\"><em><span style=\"font-family: 'Open Sans', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\"> In accumsan efficitur consectetur. Sed semper pharetra est nec finibus. Interdum et malesuada fames ac ante ipsum primis in faucibus. In hac habitasse platea dictumst.</span></em></p>
<p style=\"text-align: center;\"><span style=\"font-family: 'Open Sans', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\"><iframe src=\"https://www.youtube.com/embed/iUuKstAWof4\" width=\"560\" height=\"314\" allowfullscreen=\"allowfullscreen\"></iframe></span></p>
</body>
</html>"
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
      'volume_unit_id' => 14,
      'description' => "<!DOCTYPE html>
<html>
<head>
</head>
<body>
<p><span style=\"font-family: 'Open Sans', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin laoreet imperdiet purus. Nulla facilisi. Pellentesque viverra, purus ac consectetur porta, sem tellus varius metus, vitae bibendum diam neque suscipit tellus. Praesent pharetra, tellus consectetur dictum lacinia, sapien lacus congue arcu, in porttitor elit orci et orci. Fusce in lacus in nulla tristique volutpat in ac turpis. Ut aliquam sem ipsum. Curabitur ac nisl tempor, lobortis metus at, pellentesque ipsum. Proin pretium, leo et efficitur hendrerit, ipsum diam semper leo, id pulvinar mi justo molestie purus. Curabitur imperdiet consectetur convallis. Curabitur mattis metus dolor, vel vestibulum libero interdum sit amet. Integer vel ex nisi. <strong>Vivamus vitae lorem ullamcorper sem pellentesque sollicitudin et at quam.</strong> Duis molestie rhoncus sapien id auctor. <strong>Nunc lobortis mi ut sapien laoreet, lobortis egestas nibh auctor. Phasellus sed ornare ipsum. Curabitur ultricies neque ut lectus ornare congue.</strong></span></p>
<p><span style=\"font-family: 'Open Sans', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\"><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"../../Uploads/Products/content/1590400004.jpg\" alt=\"\" width=\"700\" height=\"460\" /></span></p>
<p><span style=\"font-family: 'Open Sans', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">Proin ac sagittis magna. Fusce maximus sit amet ex sed laoreet. Aliquam cursus nibh ac mi lobortis interdum. Praesent luctus leo in facilisis ullamcorper. Aenean ante nibh, egestas nec lorem sed, hendrerit pharetra turpis. Aliquam non eros placerat, rhoncus augue a, gravida eros. Quisque maximus, metus et egestas lobortis, enim neque euismod massa, in ultrices quam felis in magna. Donec sed imperdiet ex. Ut vulputate vehicula elit eget placerat. Duis eros tortor, dictum vel lacinia eget, pellentesque quis purus.</span></p>
<p><span style=\"font-family: 'Open Sans', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\"><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"../../Uploads/Products/content/1590400048.jpg\" alt=\"\" width=\"700\" height=\"467\" /></span></p>
<p><span style=\"font-family: 'Open Sans', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">Ut vel consectetur dolor. Nunc maximus tincidunt lectus, non interdum turpis scelerisque non. Nam tempor dui ut magna semper facilisis. Fusce quis est erat. Aenean egestas, tortor vitae sagittis vestibulum, ipsum eros vulputate eros, ut iaculis metus sem eu nunc. Sed mattis facilisis eleifend. Pellentesque odio ligula, aliquam vitae odio vitae, dictum molestie sem. Nullam dictum eros ut euismod egestas. Aenean pretium vulputate venenatis. Donec blandit, dolor nec fermentum laoreet, orci sapien semper turpis, id faucibus justo leo sit amet lectus. Etiam sollicitudin at leo a gravida. Phasellus pellentesque interdum nibh.</span></p>
<p style=\"text-align: center;\"><em><span style=\"font-family: 'Open Sans', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\"> In accumsan efficitur consectetur. Sed semper pharetra est nec finibus. Interdum et malesuada fames ac ante ipsum primis in faucibus. In hac habitasse platea dictumst.</span></em></p>
<p style=\"text-align: center;\"><span style=\"font-family: 'Open Sans', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\"><iframe src=\"https://www.youtube.com/embed/iUuKstAWof4\" width=\"560\" height=\"314\" allowfullscreen=\"allowfullscreen\"></iframe></span></p>
</body>
</html>"
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
      'volume_unit_id' => 14,
      'description' => "<!DOCTYPE html>
<html>
<head>
</head>
<body>
<p><span style=\"font-family: 'Open Sans', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin laoreet imperdiet purus. Nulla facilisi. Pellentesque viverra, purus ac consectetur porta, sem tellus varius metus, vitae bibendum diam neque suscipit tellus. Praesent pharetra, tellus consectetur dictum lacinia, sapien lacus congue arcu, in porttitor elit orci et orci. Fusce in lacus in nulla tristique volutpat in ac turpis. Ut aliquam sem ipsum. Curabitur ac nisl tempor, lobortis metus at, pellentesque ipsum. Proin pretium, leo et efficitur hendrerit, ipsum diam semper leo, id pulvinar mi justo molestie purus. Curabitur imperdiet consectetur convallis. Curabitur mattis metus dolor, vel vestibulum libero interdum sit amet. Integer vel ex nisi. <strong>Vivamus vitae lorem ullamcorper sem pellentesque sollicitudin et at quam.</strong> Duis molestie rhoncus sapien id auctor. <strong>Nunc lobortis mi ut sapien laoreet, lobortis egestas nibh auctor. Phasellus sed ornare ipsum. Curabitur ultricies neque ut lectus ornare congue.</strong></span></p>
<p><span style=\"font-family: 'Open Sans', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\"><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"../../Uploads/Products/content/1590400004.jpg\" alt=\"\" width=\"700\" height=\"460\" /></span></p>
<p><span style=\"font-family: 'Open Sans', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">Proin ac sagittis magna. Fusce maximus sit amet ex sed laoreet. Aliquam cursus nibh ac mi lobortis interdum. Praesent luctus leo in facilisis ullamcorper. Aenean ante nibh, egestas nec lorem sed, hendrerit pharetra turpis. Aliquam non eros placerat, rhoncus augue a, gravida eros. Quisque maximus, metus et egestas lobortis, enim neque euismod massa, in ultrices quam felis in magna. Donec sed imperdiet ex. Ut vulputate vehicula elit eget placerat. Duis eros tortor, dictum vel lacinia eget, pellentesque quis purus.</span></p>
<p><span style=\"font-family: 'Open Sans', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\"><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"../../Uploads/Products/content/1590400048.jpg\" alt=\"\" width=\"700\" height=\"467\" /></span></p>
<p><span style=\"font-family: 'Open Sans', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">Ut vel consectetur dolor. Nunc maximus tincidunt lectus, non interdum turpis scelerisque non. Nam tempor dui ut magna semper facilisis. Fusce quis est erat. Aenean egestas, tortor vitae sagittis vestibulum, ipsum eros vulputate eros, ut iaculis metus sem eu nunc. Sed mattis facilisis eleifend. Pellentesque odio ligula, aliquam vitae odio vitae, dictum molestie sem. Nullam dictum eros ut euismod egestas. Aenean pretium vulputate venenatis. Donec blandit, dolor nec fermentum laoreet, orci sapien semper turpis, id faucibus justo leo sit amet lectus. Etiam sollicitudin at leo a gravida. Phasellus pellentesque interdum nibh.</span></p>
<p style=\"text-align: center;\"><em><span style=\"font-family: 'Open Sans', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\"> In accumsan efficitur consectetur. Sed semper pharetra est nec finibus. Interdum et malesuada fames ac ante ipsum primis in faucibus. In hac habitasse platea dictumst.</span></em></p>
<p style=\"text-align: center;\"><span style=\"font-family: 'Open Sans', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\"><iframe src=\"https://www.youtube.com/embed/iUuKstAWof4\" width=\"560\" height=\"314\" allowfullscreen=\"allowfullscreen\"></iframe></span></p>
</body>
</html>"
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
      'volume_unit_id' => 14,
      'description' => "<!DOCTYPE html>
<html>
<head>
</head>
<body>
<p><span style=\"font-family: 'Open Sans', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin laoreet imperdiet purus. Nulla facilisi. Pellentesque viverra, purus ac consectetur porta, sem tellus varius metus, vitae bibendum diam neque suscipit tellus. Praesent pharetra, tellus consectetur dictum lacinia, sapien lacus congue arcu, in porttitor elit orci et orci. Fusce in lacus in nulla tristique volutpat in ac turpis. Ut aliquam sem ipsum. Curabitur ac nisl tempor, lobortis metus at, pellentesque ipsum. Proin pretium, leo et efficitur hendrerit, ipsum diam semper leo, id pulvinar mi justo molestie purus. Curabitur imperdiet consectetur convallis. Curabitur mattis metus dolor, vel vestibulum libero interdum sit amet. Integer vel ex nisi. <strong>Vivamus vitae lorem ullamcorper sem pellentesque sollicitudin et at quam.</strong> Duis molestie rhoncus sapien id auctor. <strong>Nunc lobortis mi ut sapien laoreet, lobortis egestas nibh auctor. Phasellus sed ornare ipsum. Curabitur ultricies neque ut lectus ornare congue.</strong></span></p>
<p><span style=\"font-family: 'Open Sans', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\"><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"../../Uploads/Products/content/1590400004.jpg\" alt=\"\" width=\"700\" height=\"460\" /></span></p>
<p><span style=\"font-family: 'Open Sans', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">Proin ac sagittis magna. Fusce maximus sit amet ex sed laoreet. Aliquam cursus nibh ac mi lobortis interdum. Praesent luctus leo in facilisis ullamcorper. Aenean ante nibh, egestas nec lorem sed, hendrerit pharetra turpis. Aliquam non eros placerat, rhoncus augue a, gravida eros. Quisque maximus, metus et egestas lobortis, enim neque euismod massa, in ultrices quam felis in magna. Donec sed imperdiet ex. Ut vulputate vehicula elit eget placerat. Duis eros tortor, dictum vel lacinia eget, pellentesque quis purus.</span></p>
<p><span style=\"font-family: 'Open Sans', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\"><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"../../Uploads/Products/content/1590400048.jpg\" alt=\"\" width=\"700\" height=\"467\" /></span></p>
<p><span style=\"font-family: 'Open Sans', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">Ut vel consectetur dolor. Nunc maximus tincidunt lectus, non interdum turpis scelerisque non. Nam tempor dui ut magna semper facilisis. Fusce quis est erat. Aenean egestas, tortor vitae sagittis vestibulum, ipsum eros vulputate eros, ut iaculis metus sem eu nunc. Sed mattis facilisis eleifend. Pellentesque odio ligula, aliquam vitae odio vitae, dictum molestie sem. Nullam dictum eros ut euismod egestas. Aenean pretium vulputate venenatis. Donec blandit, dolor nec fermentum laoreet, orci sapien semper turpis, id faucibus justo leo sit amet lectus. Etiam sollicitudin at leo a gravida. Phasellus pellentesque interdum nibh.</span></p>
<p style=\"text-align: center;\"><em><span style=\"font-family: 'Open Sans', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\"> In accumsan efficitur consectetur. Sed semper pharetra est nec finibus. Interdum et malesuada fames ac ante ipsum primis in faucibus. In hac habitasse platea dictumst.</span></em></p>
<p style=\"text-align: center;\"><span style=\"font-family: 'Open Sans', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\"><iframe src=\"https://www.youtube.com/embed/iUuKstAWof4\" width=\"560\" height=\"314\" allowfullscreen=\"allowfullscreen\"></iframe></span></p>
</body>
</html>"
    ]);

  }
}
