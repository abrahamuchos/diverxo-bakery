<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomers extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('customers', function (Blueprint $table) {
//      Key Constraints
      $table->id();
      $table->integer('user_id')->unsigned();
      $table->integer('type_id')->unsigned()->comment('Tipo de plataforma(Stripe, Paypal,etc');

//      Content
      $table->string('customer_id',255)->comment('Id proveído por el API');
      $table->timestamps();

//      Foreign Keys
      $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
      $table->foreign('type_id')->references('id')->on('attributes')->onDelete('cascade');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::table('customers', function (Blueprint $table) {
      $table->dropForeign('customers_type_id_foreign');
      $table->dropForeign('customers_user_id_foreign');
      $table->dropIfExists('customers');
    });
  }
}
