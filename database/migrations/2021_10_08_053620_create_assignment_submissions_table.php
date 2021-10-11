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
            $table->id('assignment_id');

            $table->foreignId('user_id')->constrained('users','user_id')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('homework_id')->constrained('homework','homework_id')->cascadeOnDelete()->cascadeOnUpdate();

            $table->longText('assignment');
            $table->boolean('completion_status')->default(0);
            $table->integer('grade');
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
        Schema::dropIfExists('assignment_submissions');
    }
}
