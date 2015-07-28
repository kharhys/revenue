<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wards', function(Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('subcounty_id')->unsigned()->nullable();
            $table->foreign('subcounty_id')->references('id')->on('subcounties');
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
        Schema::drop('wards');
    }
}
