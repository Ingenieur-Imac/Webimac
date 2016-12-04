<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Updatei18nSeveralItems extends Migration
{
    /**
     * Run the migrations.
     * 
     * @return void
     */
    public function up()
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->longText('en_description');
        });
        Schema::table('student_testimonials',function (Blueprint $table){
            $table->longText('en_overview');
        });
        Schema::table('student_exchange_testimonials',function (Blueprint $table){
            $table->longText('en_overview');
        });
        Schema::table('enterprise_testimonials',function (Blueprint $table){
            $table->longText('en_overview');
        });
        Schema::table('tags',function (Blueprint $table){
            $table->string('en_name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->dropColumn('en_description');
        });
        Schema::table('student_testimonials',function (Blueprint $table){
            $table->dropColumn('en_overview');
        });
        Schema::table('student_exchange_testimonials',function (Blueprint $table){
            $table->dropColumn('en_overview');
        });
        Schema::table('enterprise_testimonials',function (Blueprint $table){
            $table->dropColumn('en_overview');
        });
        Schema::table('tags',function (Blueprint $table){
            $table->dropColumn('en_name');
        });
    }
}
