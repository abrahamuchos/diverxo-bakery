<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('items', function (Blueprint $table) {
//      Key Constraints
      $table->id();
      $table->integer('user_id')->unsigned();
      $table->integer('order_id')->unsigned();
      $table->integer('product_id')->unsigned();

//      Content
      $table->integer('qty');
      $table->double('price');
      $table->timestamps();

//      Foreing Key
      $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
      $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade');
      $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::table('items', function (Blueprint $table) {
      $table->dropForeign('items_user_id_foreign');
      $table->dropForeign('items_order_id_foreign');
      $table->dropForeign('items_product_id_foreign');
      $table->dropIfExists('items');
    });

  }
}
