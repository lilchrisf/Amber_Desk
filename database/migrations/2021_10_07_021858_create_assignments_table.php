<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssignmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up():void
    {
        Schema::create('assignments', function (Blueprint $table) {
            $table->id('assign_id');
            $table->foreignId('class_id')->constrained('classrooms','class_id')->cascadeOnUpdate()->cascadeOnDelete();
            $table->string('visibility');
            $table->string('title');
            $table->string('topic');
            $table->string('desc')->nullable();
            $table->string('points');
            $table->date('due_date');
            $table->string('status')->default(1);
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
        Schema::dropIfExists('assignments');
    }
}
