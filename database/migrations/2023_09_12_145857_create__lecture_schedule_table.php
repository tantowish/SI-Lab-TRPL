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
        Schema::create('lectureSchedule', function (Blueprint $table) {
            $table->id("schedule_id");

            $table->unsignedBigInteger('laboratorium_id');
            $table->foreign('laboratorium_id')->references('laboratorium_id')->on('laboratorium');

            $table->dateTime('start_time');
            $table->dateTime('end_time');

            $table->unsignedBigInteger('labAdmin_id');
            $table->foreign('labAdmin_id')->references('labAdmin_id')->on('labAdministrator');

            $table->unsignedBigInteger('subject_id');
            $table->foreign('subject_id')->references('subject_id')->on('subjects');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lectureSchedule');
    }
};
