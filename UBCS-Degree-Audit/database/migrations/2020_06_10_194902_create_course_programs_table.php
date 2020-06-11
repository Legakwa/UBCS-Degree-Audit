<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseProgramsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_programs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('program_code');
            $table->string('course_code');
            $table->year('year');
            $table->enum('course_type',['core','option','elective']);
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
        Schema::dropIfExists('course_programs');
    }
}
