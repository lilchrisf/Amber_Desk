<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassroomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classrooms', function (Blueprint $table) {
            $table->id('class_id');
            $table->foreignId('user_id')->constrained('users','user_id')->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('class_nm');
            $table->string('class_desc');
            $table->string('subject');
            $table->string('password');
            $table->string('invi_link');
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
        Schema::dropIfExists('classrooms');
    }
}
