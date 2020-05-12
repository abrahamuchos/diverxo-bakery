<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('orders', function (Blueprint $table) {
//      Key Constraints
      $table->id();
      $table->integer('user_id')->unsigned();

//      Content
      $table->string('charge_id', 255);
      $table->boolean('processed');
      $table->double('total');
      $table->string('risk_level',15);
      $table->string('status',15);
      $table->timestamps();

//      Foreing Key
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
    Schema::table('orders', function (Blueprint $table) {
      $table->dropForeign('orders_user_id_foreign');
      $table->dropIfExists('orders');
    });
  }
}
