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
        Schema::create('car_ins', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->string('car_name');
            $table->string('car_tage');
            $table->string('car_number');
            $table->string('car_chassis');
            $table->string('car_year');
            $table->string('ins_type');
            $table->string('ins_company');
            $table->string('ins_serialNumber');
            $table->string('ins_premium');
            $table->string('ins_expire');
            $table->string('pic_car');
            $table->string('pic_license');
            $table->string('pic_inss');
            $table->unique(['car_number', 'car_chassis','ins_serialNumber']);

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
        Schema::dropIfExists('car_ins');
    }
};