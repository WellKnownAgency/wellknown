<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLeadServiceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lead_service', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('lead_id')->unsigned();
          $table->foreign('lead_id')->references('id')->on('leads')->onDelete('cascade');
          $table->integer('service_id')->unsigned();
          $table->foreign('service_id')->references('id')->on('services')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lead_service');
    }
}
