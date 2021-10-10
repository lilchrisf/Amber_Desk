<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_infos', function (Blueprint $table) {
            $table->id('user_info');
            $table->foreignId('user_id')->constrained('users','user_id')->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('first_nm')->nullable();
            $table->string('last_nm')->nullable();
            $table->string('username')->nullable()->unique();
            $table->string('avatar')->nullable();
            $table->longText('bio')->nullable();

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
        Schema::dropIfExists('user_info');
    }
}
