<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddPermitFieldsToAccountsTable extends Migration {

    /**
     * Make changes to the table.
     *
     * @return void
     */
    public function up()
    {   
        Schema::table('accounts', function(Blueprint $table) {     
            
            $table->string('permit_file_name')->nullable();
            $table->integer('permit_file_size')->nullable();
            $table->string('permit_content_type')->nullable();
            $table->timestamp('permit_updated_at')->nullable();

        });

    }

    /**
     * Revert the changes to the table.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('accounts', function(Blueprint $table) {

            $table->dropColumn('permit_file_name');
            $table->dropColumn('permit_file_size');
            $table->dropColumn('permit_content_type');
            $table->dropColumn('permit_updated_at');

        });
    }

}
