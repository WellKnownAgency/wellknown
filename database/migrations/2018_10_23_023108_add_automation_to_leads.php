<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAutomationToLeads extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('leads', function($table) {
        $table->boolean('lastemail')->after('source_id')->default(false);
        $table->boolean('fllupemail')->after('source_id')->default(false);
        $table->boolean('introcall')->after('source_id')->default(false);
        $table->boolean('introemail')->after('source_id')->default(false);
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('projects', function($table) {
        $table->dropColumn('lastemail');
        $table->dropColumn('fllupemail');
        $table->dropColumn('introcall');
        $table->dropColumn('introemail');
      });
    }
}
