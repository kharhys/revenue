<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFieldsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fields', function(Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('type');
            $table->string('repo');
            $table->string('repokey');
            $table->string('ruleset');
            $table->integer('form_id')->unsigned()->nullable();
            $table->foreign('form_id')->references('id')->on('forms');
            $table->integer('section_id')->unsigned()->nullable();
            $table->foreign('section_id')->references('id')->on('sections');
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
        Schema::drop('fields');
    }
}
