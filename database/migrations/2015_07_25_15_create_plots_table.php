<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlotsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plots', function(Blueprint $table) {
            $table->increments('id');
            $table->string('plotnumber');
            $table->integer('area');
            $table->text('use');
            $table->integer('ward_id')->unsigned()->nullable();
            $table->foreign('ward_id')->references('id')->on('wards');
            $table->integer('account_id')->unsigned()->nullable();
            $table->foreign('account_id')->references('id')->on('accounts');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('plots');
    }
}
