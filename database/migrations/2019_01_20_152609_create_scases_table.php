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
          $table->increments('id');
          $table->string('title');
          $table->string('title_work');
          $table->string('header_image');
          $table->string('excerpt');
          $table->text('body');
          $table->string('image');
          $table->string('slug');
          $table->string('seotitle');
          $table->string('dscr');

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
