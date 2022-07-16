<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->foreignId('users_id')->constrained();
            $table->foreignId('offices_id')->nullable()->constrained();
            $table->foreignId('marktings_id')->nullable()->constrained();
            $table->string('car_name')->nullable();
            $table->string('car_numberEngine');
            $table->string('car_chassis');
            $table->string('car_year')->nullable();
            $table->string('car_color')->nullable();
            $table->string('ins_type')->nullable();
            $table->string('ins_company')->nullable();
            $table->string('ins_serialNumber');
            $table->string('ins_premium')->nullable();
            $table->string('ins_expire')->nullable();
            $table->string('pic_car')->nullable();
            $table->string('pic_license')->nullable();
            $table->string('pic_ins')->nullable();
            $table->timestamps();

            DB::raw('ALTER TABLE persons AUTO_INCREMENT = 50000');


            $table->unique(['car_numberEngine','car_chassis','ins_serialNumber']);
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