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
        Schema::create('attendances', function (Blueprint $table) {
            $table->id("attendance_id");

            $table->unsignedBigInteger('assistant_id');
            $table->foreign('assistant_id')->references('assistant_id')->on('assistant_lecturers')->onDelete('cascade'); // Add this line to set the delete behavior

            $table->unsignedBigInteger('schedule_id');
            $table->foreign('schedule_id')->references('schedule_id')->on('lecture_schedules');

            $table->enum('status', ['hadir', 'tidak hadir'])->default('tidak hadir');
            $table->boolean('isQR')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('attendances');
    }
};
