<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMediasTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('medias', function (Blueprint $table) {
//      Key Constraints
      $table->id();
      $table->integer('category_id')->unsigned()->nullable();
      $table->integer('product_id')->unsigned()->nullable();
      $table->integer('content_id')->unique()->nullable()->comment('Imagen en contenido de la web');

//      Content
      $table->string('name',255);
      $table->string('src',255);
      $table->string('type',60)->comment('Tipo de imagen o video JPG, PNG, MP3, MOV, etc');
      $table->timestamps();

//      Foreign Keys
      $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
      $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
      $table->foreign('content_id')->references('id')->on('attributes')->onDelete('cascade');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::table('medias', function (Blueprint $table) {
      $table->dropForeign('medias_category_id_foreign');
      $table->dropForeign('medias_product_id_foreign');
      $table->dropForeign('medias_content_id_foreign');
      $table->dropIfExists('medias');
    });
  }
}
