<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddTitledeedFieldsToPlotsTable extends Migration {

    /**
     * Make changes to the table.
     *
     * @return void
     */
    public function up()
    {   
        Schema::table('plots', function(Blueprint $table) {     
            
            $table->string('titledeed_file_name')->nullable();
            $table->integer('titledeed_file_size')->nullable();
            $table->string('titledeed_content_type')->nullable();
            $table->timestamp('titledeed_updated_at')->nullable();

        });

    }

    /**
     * Revert the changes to the table.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('plots', function(Blueprint $table) {

            $table->dropColumn('titledeed_file_name');
            $table->dropColumn('titledeed_file_size');
            $table->dropColumn('titledeed_content_type');
            $table->dropColumn('titledeed_updated_at');

        });
    }

}
