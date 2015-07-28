<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function(Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('krapin');
            $table->string('permit');
            $table->string('certificate');
            $table->string('phone');
            $table->string('email');
            $table->string('website');
            $table->string('address');
            $table->string('code');
            $table->integer('ward_id')->unsigned()->nullable();
            $table->foreign('ward_id')->references('id')->on('wards');
            $table->integer('service_id')->unsigned()->nullable();
            $table->foreign('service_id')->references('id')->on('services');
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
        Schema::drop('profiles');
    }
}
