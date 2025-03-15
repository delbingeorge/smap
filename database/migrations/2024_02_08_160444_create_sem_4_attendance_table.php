<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sem_4_attendance', function (Blueprint $table) {
            $table->integer('form_number');
            $table->string('student_id')->foreign()->references('student_id')->on('students');
            $table->string('22MCA201');
            $table->primary(['form_number', 'student_id']);
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
        Schema::dropIfExists('sem_4_attendance');
    }
};
