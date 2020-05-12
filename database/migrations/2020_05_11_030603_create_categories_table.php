<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('categories', function (Blueprint $table) {
//      Key Constraints
      $table->id();
      $table->integer('category_id')->unsigned()->nullable();

//      Content
      $table->string('name', 45)->unique();
      $table->string('slug',65);
      $table->string('description',70)->nullable();
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
    Schema::table('categories', function (Blueprint $table) {
      $table->dropForeign('categories_category_id_foreign');
      $table->dropIfExists('categories');
    });
  }
}
