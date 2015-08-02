<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddCertificateFieldsToAccountsTable extends Migration {

    /**
     * Make changes to the table.
     *
     * @return void
     */
    public function up()
    {   
        Schema::table('accounts', function(Blueprint $table) {     
            
            $table->string('certificate_file_name')->nullable();
            $table->integer('certificate_file_size')->nullable();
            $table->string('certificate_content_type')->nullable();
            $table->timestamp('certificate_updated_at')->nullable();

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

            $table->dropColumn('certificate_file_name');
            $table->dropColumn('certificate_file_size');
            $table->dropColumn('certificate_content_type');
            $table->dropColumn('certificate_updated_at');

        });
    }

}
