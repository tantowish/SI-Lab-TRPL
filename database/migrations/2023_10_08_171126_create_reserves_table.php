<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('reserves', function (Blueprint $table) {
            $table->id("reserve_id");
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('user_id')->on('users');

            $table->dateTime('start_time');
            $table->dateTime('end_time');
            
            $table->string('laboratorium_id', 50);
            $table->foreign('laboratorium_id')->references('laboratorium_id')->on('laboratorium');

            $table->string("file",100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reserves');
    }
};
