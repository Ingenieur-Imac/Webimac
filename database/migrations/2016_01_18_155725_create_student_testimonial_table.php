<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentTestimonialTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_testimonials', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('job');
            $table->integer('year')->unsigned()->nullable();
            $table->longText('overview');
            $table->string('url_image')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('student_testimonials');
    }
}
