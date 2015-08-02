<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddPassportphotoFieldsToPlotsTable extends Migration {

    /**
     * Make changes to the table.
     *
     * @return void
     */
    public function up()
    {   
        Schema::table('plots', function(Blueprint $table) {     
            
            $table->string('passportphoto_file_name')->nullable();
            $table->integer('passportphoto_file_size')->nullable();
            $table->string('passportphoto_content_type')->nullable();
            $table->timestamp('passportphoto_updated_at')->nullable();

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

            $table->dropColumn('passportphoto_file_name');
            $table->dropColumn('passportphoto_file_size');
            $table->dropColumn('passportphoto_content_type');
            $table->dropColumn('passportphoto_updated_at');

        });
    }

}
