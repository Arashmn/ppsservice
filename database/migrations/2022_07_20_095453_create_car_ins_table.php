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
            $table->string('car_name')->nullable();
            $table->string('car_tage')->nullable();;
            $table->string('car_number');
            $table->string('car_chassis');
            $table->string('car_year')->nullable();;
            $table->string('ins_type')->nullable();;
            $table->string('ins_company')->nullable();;
            $table->string('ins_serialNumber');
            $table->string('ins_premium')->nullable();;
            $table->string('ins_expire')->nullable();;
            $table->string('pic_car')->nullable();;
            $table->string('pic_license')->nullable();;
            $table->string('pic_inss')->nullable();;
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
