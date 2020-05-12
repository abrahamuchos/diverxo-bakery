<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('products', function (Blueprint $table) {
//      Key Constraints
      $table->id();
      $table->integer('category_id')->unsigned();

//      Content
      $table->string('name',60);
      $table->string('slug',80);
      $table->string('brand', 255)->nullable();
      $table->string('sku',60)->nullable();
      $table->double('old_price')->nullable();
      $table->double('price');
      $table->boolean('is_active')->default(true);
      $table->string('pre_description',70);
      $table->longText('description')->nullable();
      $table->integer('stock');
      $table->timestamps();

//      Foreign Keys
      $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::table('products', function (Blueprint $table) {
      $table->dropForeign('products_category_id_foreign');
      $table->dropIfExists('products');
    });
  }
}
