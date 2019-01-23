<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCaseServiceScaseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('case_service_scase', function (Blueprint $table) {
          $table->integer('case_service_id')->unsigned();
          $table->integer('scase_id')->unsigned();

          $table->foreign('case_service_id')->references('id')->on('case_services')
              ->onUpdate('cascade')->onDelete('cascade');
          $table->foreign('scase_id')->references('id')->on('scases')
              ->onUpdate('cascade')->onDelete('cascade');

          $table->primary(['case_service_id', 'scase_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('case_service_scase');
    }
}
