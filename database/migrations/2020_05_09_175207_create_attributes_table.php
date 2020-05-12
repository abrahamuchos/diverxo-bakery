<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttributesTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('attributes', function (Blueprint $table) {
//      Key Constraints
      $table->id();
      $table->integer('attribute_id')->unsigned()->nullable();

//      Content
      $table->string('name', 255);
      $table->string('value', 255)->nullable();
      $table->timestamps();

//      Foreign Keys
      $table->foreign('attribute_id')->references('id')->on('attributes')->onDelete('cascade');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::table('attributes', function (Blueprint $table) {
      $table->dropForeign('attributes_attribute_id_foreign');
      $table->dropIfExists('attributes');
    });
  }
}
