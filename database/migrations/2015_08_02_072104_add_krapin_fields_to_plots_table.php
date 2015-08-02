<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddKrapinFieldsToPlotsTable extends Migration {

    /**
     * Make changes to the table.
     *
     * @return void
     */
    public function up()
    {   
        Schema::table('plots', function(Blueprint $table) {     
            
            $table->string('krapin_file_name')->nullable();
            $table->integer('krapin_file_size')->nullable();
            $table->string('krapin_content_type')->nullable();
            $table->timestamp('krapin_updated_at')->nullable();

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

            $table->dropColumn('krapin_file_name');
            $table->dropColumn('krapin_file_size');
            $table->dropColumn('krapin_content_type');
            $table->dropColumn('krapin_updated_at');

        });
    }

}
