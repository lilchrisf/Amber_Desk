<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssignmentSubmissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assignment_submissions', function (Blueprint $table) {
            $table->id('assign_id');

            $table->foreignId('student_id')->constrained('users','user_id')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('home_work')->constrained('homework','hw_id')->cascadeOnDelete()->cascadeOnUpdate();;

            $table->longText('assignment');
            $table->string('completion_status');
            $table->integer('grade');

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
        Schema::dropIfExists('assignment_submissions');
    }
}
