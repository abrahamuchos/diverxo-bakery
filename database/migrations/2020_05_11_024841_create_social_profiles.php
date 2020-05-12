<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSocialProfiles extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('social_profiles', function (Blueprint $table) {
//      Key Constraints
      $table->id();
      $table->integer('user_id')->unsigned();
      $table->integer('type_id')->unsigned()->comment('Tipo Google, Facebbok, Linkedin, etc');

//      Content
      $table->string('social_id',255)->comment('Id proporcionado por la plataforma');

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
    Schema::table('social_profiles', function (Blueprint $table) {
      $table->dropForeign('social_profiles_type_id_foreign');
      $table->dropForeign('social_profiles_user_id_foreign');
      $table->dropIfExists('social_profiles');
    });
  }
}
