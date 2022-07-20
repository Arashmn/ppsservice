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
            $table->id()->startingValue(50000);
            $table->string('name');
            $table->string('family');
            $table->string('father');
            $table->string('sex');
            $table->string('code_meli');
            $table->string('mobile_number');
            $table->string('email')->nullable();
            $table->string('birthday')->nullable();
            $table->string('password')->nullable();
            $table->string('address')->nullable();
            $table->string('department_id')->nullable();
            $table->boolean('is_staff')->default(0);
            $table->string('moaref')->nullable();
            $table->string('pic')->nullable();
            $table->string('accept')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();

            $table->unique(['mobile_number', 'code_meli']);
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
