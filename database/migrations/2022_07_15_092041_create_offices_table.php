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
        Schema::create('offices', function (Blueprint $table) {
            $table->id();
            $table->foreignId('users_id')->constrained()->nullOnDelete();;
            $table->string('type')->nullable();
            $table->string('title');
            $table->string('license_number')->nullable();
            $table->string('agent_code')->nullable();
            $table->string('work_history')->nullable();
            $table->string('area')->nullable();
            $table->string('apprentice')->nullable();
            $table->string('address_office')->nullable();
            $table->string('phone_office')->nullable();
            $table->enum('is_owner',['مالک هستم','مستاجر هستم']);
            $table->enum('is_parking',['پارکینگ دارم','پارکینگ ندارم']);
            $table->string('license_file')->nullable();
            $table->string('image_file')->nullable();
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
