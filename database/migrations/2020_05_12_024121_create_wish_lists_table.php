<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWishListsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('wish_lists', function (Blueprint $table) {
//      Key Constraints
      $table->id();
      $table->integer('user_id')->unsigned();
      $table->integer('product_id')->unsigned();

//      Content
      $table->timestamps();

//      Foreing Key
      $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
      $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::table('wish_lists', function (Blueprint $table) {
      $table->dropForeign('wish_lists_user_id_foreign');
      $table->dropForeign('wish_lists_product_id_foreign');
      $table->dropIfExists('wish_lists');
    });
  }
}
