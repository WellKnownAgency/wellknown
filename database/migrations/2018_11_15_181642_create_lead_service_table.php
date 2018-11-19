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
          $table->integer('lead_id')->unsigned();
          $table->integer('service_id')->unsigned();

          $table->foreign('lead_id')->references('id')->on('leads')
              ->onUpdate('cascade')->onDelete('cascade');
          $table->foreign('service_id')->references('id')->on('services')
              ->onUpdate('cascade')->onDelete('cascade');

          $table->primary(['lead_id', 'service_id']);
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
