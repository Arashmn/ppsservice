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
        Schema::create('persons', function (Blueprint $table) {
            $table->id();
            $table->foreignId('users_id')->constrained()->nullOnDelete();
            $table->foreignId('offices_id')->constrained()->nullOnDelete();
            $table->foreignId('marktings_id')->constrained()->nullOnDelete();
            $table->string('car_numberEngine');
            $table->string('car_chassis');
            $table->string('car_year');
            $table->string('ins_type');
            $table->string('ins_company');
            $table->string('ins_serialNumber');
            $table->string('ins_premium');
            $table->string('ins_expire');
            $table->string('pic_car');
            $table->string('pic_license');
            $table->string('pic_ins');
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
        Schema::dropIfExists('persons');
    }
};
