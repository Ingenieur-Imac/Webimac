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
            $table->integer('id_gallery')->unique();
            $table->string('name');
            $table->string('description');
            $table->string('excerpt');
            $table->timestamp('date');
            $table->string('name_of_tutors');
            $table->string('link_github')->nullable();
            $table->string('link_web')->nullable();
            $table->string('link_vimeo')->nullable();
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
        Schema::drop('projects');
    }
}
