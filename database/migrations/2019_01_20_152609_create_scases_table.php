<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scases', function (Blueprint $table) {
          $table->string('title');
          $table->string('header_image');
          $table->string('excerpt');
          $table->text('body');
          $table->string('image');
          $table->string('slug');
          $table->integer('services_id')->unsigned()->nullable();
          $table->integer('technology_id')->unsigned()->nullable();
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
        Schema::dropIfExists('scases');
    }
}
