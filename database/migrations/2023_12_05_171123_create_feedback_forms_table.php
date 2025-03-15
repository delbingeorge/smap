<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeedbackFormsTable extends Migration
{
    public function up()
    {
        Schema::create('feedback_forms', function (Blueprint $table) {
            $table->id();
            $table->integer('form_number');
            $table->string('student_id')->foreign()->references('student_id')->on('students');
            $table->integer('semester')->foreign()->references('semester_number')->on('semesters');
            $table->string('field1');
            $table->string('field2');
            $table->string('field3');
            $table->string('field4');
            $table->string('field5');
            $table->string('field6');
            $table->string('field7');
            $table->string('field8');
            $table->string('field9');
            $table->string('field10');
            $table->string('field11');
            $table->string('field12');
            $table->string('field13');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('feedback_forms');
    }
}
