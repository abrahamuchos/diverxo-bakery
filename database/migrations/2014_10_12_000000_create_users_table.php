<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('users', function (Blueprint $table) {
      //      Key Constraints
      $table->id();

      //      Content
      $table->string('email')->unique();
      $table->boolean('is_admin')->default('false');
      $table->boolean('gender');
      $table->string('name', 32);
      $table->string('last_name', 32);
      $table->string('avatar', 255)->nullable();
      $table->string('password');
      $table->integer('document')->nullable();
      $table->string('country',65)->nullable();
      $table->string('state',65)->nullable();
      $table->string('city',65)->nullable();
      $table->string('address_line1',255)->nullable();
      $table->string('address_line2',255)->nullable();
      $table->string('phone_number',255)->nullable();
      $table->boolean('is_subscriber')->default(false);

      $table->timestamp('email_verified_at')->nullable();
      $table->rememberToken();
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('users');
  }
}
