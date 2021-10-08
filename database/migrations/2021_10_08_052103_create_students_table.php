<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id('stu_id');

            $table->foreignId('student_id')->constrained('users','user_id')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('class_id')->constrained('class_rooms','class_id')->cascadeOnDelete()->cascadeOnUpdate();
            $table->boolean('is_enrolled');


            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
