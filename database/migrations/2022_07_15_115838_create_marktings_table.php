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
        Schema::create('marktings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('users_id')->constrained();
            $table->foreignId('offices_id')->constrained();
            $table->string('type')->nullable();
            $table->enum('cooperate',['دائم','پاره وقت']);
            $table->enum('contract',[' پورسانتی','قراردادی']);
            $table->string('history')->nullable();
            $table->string('about')->nullable();
            $table->string('file')->nullable();
            $table->timestamps();

            DB::raw('ALTER TABLE marktings AUTO_INCREMENT = 100100');

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