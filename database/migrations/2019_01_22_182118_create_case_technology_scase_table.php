<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCaseTechnologyScaseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('case_technology_scase', function (Blueprint $table) {
          $table->integer('case_technology_id')->unsigned();
          $table->integer('scase_id')->unsigned();

          $table->foreign('case_technology_id')->references('id')->on('case_technologies')
              ->onUpdate('cascade')->onDelete('cascade');
          $table->foreign('scase_id')->references('id')->on('scases')
              ->onUpdate('cascade')->onDelete('cascade');

          $table->primary(['case_technology_id', 'scase_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('case_technology_scace');
    }
}
