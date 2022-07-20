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
        Schema::create('offices', function (Blueprint $table) {
            $table->id()->startingValue(100100);
            $table->foreignId('user_id')->constrained();
            $table->string('type')->nullable();
            $table->string('company')->nullable();
            $table->string('service')->nullable();
            $table->string('title')->nullable();
            $table->string('management')->nullable();
            $table->string('license_number')->nullable();
            $table->string('agent_code')->nullable();
            $table->string('work_history')->nullable();
            $table->string('area')->nullable();
            $table->string('cooperate')->nullable();
            $table->string('contract')->nullable();
            $table->string('apprentice')->nullable();
            $table->string('address_office')->nullable();
            $table->string('phone_office')->nullable();
            $table->string('is_owner')->nullable();
            $table->string('is_parking')->nullable();
            $table->string('license_file')->nullable();
            $table->string('image_file')->nullable();
            $table->string('accept')->nullable();
            $table->timestamps();

            $table->unique(['license_number','agent_code']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('offices');
    }
};