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
        Schema::create('marktings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('users_id')->constrained()->nullOnDelete();
            $table->foreignId('offices_id')->constrained()->nullOnDelete();
            $table->string('type');
            $table->enum('cooperate',['دائم','پاره وقت']);
            $table->enum('contract',[' پورسانتی','قراردادی']);
            $table->string('history');
            $table->string('about');
            $table->string('file');
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
        Schema::dropIfExists('marktings');
    }
};