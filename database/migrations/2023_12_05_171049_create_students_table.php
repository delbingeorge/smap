<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('student_id')->unique();
            $table->string('fullname');
            $table->string('email')->unique();
            $table->string('contact')->nullable();
            $table->integer('semester');
            $table->string('about')->nullable();
            $table->string('skills')->nullable();
            $table->string('projects')->nullable();
            $table->boolean('feedback_filled')->default(true);
            $table->boolean('mse_filled')->default(true);

            $table->foreign('student_id')->references('user_id')->on('users');
            $table->foreign('semester')->references('semester_number')->on('semesters');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('students');
    }
}
