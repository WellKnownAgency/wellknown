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
          $table->integer('case_services_id')->unsigned()->nullable();
          $table->integer('case_technologies_id')->unsigned()->nullable();
          $table->timestamps();

          $table->foreign('case_services_id')->references('id')->on('case_services')
              ->onUpdate('cascade')->onDelete('cascade');

          $table->foreign('case_technologies_id')->references('id')->on('case_technologies')
              ->onUpdate('cascade')->onDelete('cascade');
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
