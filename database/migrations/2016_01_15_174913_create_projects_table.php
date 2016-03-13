<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_gallery')->unique()->nullable();
            $table->string('name');
            $table->longText('description');
            $table->string('excerpt');
            $table->timestamp('date');
            $table->string('contributors');
            $table->string('name_of_tutors');
            $table->string('awards')->nullable();
            $table->string('url_page')->unique();
            $table->string('url_image')->nullable();
            $table->string('platform')->nullable();
            $table->string('url_video')->nullable();
            $table->string('github_link')->nullable();
            $table->string('web_link')->nullable();
            $table->string('vimeo_link')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('projects');
    }
}
