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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('family');
            $table->string('father');
            $table->enum('sex', ['male', 'female']);
            $table->string('code_meli');
            $table->string('mobile_number');
            $table->string('email')->nullable();
            $table->string('birthday')->nullable();
            $table->string('password')->nullable();
            $table->string('ip')->nullable();
            $table->string('address')->nullable();
            $table->string('department_id')->nullable();
            $table->string('path')->nullable();
            $table->rememberToken();
            $table->timestamp('email_verified_at')->nullable();
            $table->timestamps();

            $table->unique(['mobile_number', 'code_meli','email']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};