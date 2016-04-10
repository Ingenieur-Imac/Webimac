<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_tags', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_project')->unsigned()->references('id')->on('projects');
            $table->integer('id_tag')->unsigned()->references('id')->on('tags');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('project_tags');
    }
}
