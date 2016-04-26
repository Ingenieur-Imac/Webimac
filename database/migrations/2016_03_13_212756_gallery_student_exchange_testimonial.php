<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class GalleryStudentExchangeTestimonial extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gallery_student_exchange_testimonials', function( Blueprint $table){
            $table->increments('id');
            $table->integer('id_testimonial')->unsigned();
            $table->string('url');
            $table->integer('place');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('gallery_student_exchange_testimonials');
    }
}
