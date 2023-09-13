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
        Schema::create('attendance', function (Blueprint $table) {
            $table->id("attendance_id");

            $table->unsignedBigInteger('assistant_id');
            $table->foreign('assistant_id')->references('assistant_id')->on('assistantLecturer');

            $table->unsignedBigInteger('schedule_id');
            $table->foreign('schedule_id')->references('schedule_id')->on('lectureSchedule');

            $table->enum('status', ['hadir', 'tidak hadir']);

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_attendance');
    }
};
