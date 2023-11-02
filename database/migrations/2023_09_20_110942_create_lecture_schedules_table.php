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
        Schema::create('lecture_schedules', function (Blueprint $table) {
            $table->id("schedule_id");

            $table->string('laboratorium_id', 50);
            $table->foreign('laboratorium_id')->references('laboratorium_id')->on('laboratorium');


            $table->dateTime('start_time');
            $table->dateTime('end_time');

            $table->unsignedBigInteger('lab_admin_id');
            $table->foreign('lab_admin_id')->references('lab_admin_id')->on('lab_administrators');

            $table->unsignedBigInteger('subject_id')->nullable();
            $table->foreign('subject_id')->references('subject_id')->on('subjects');

            $table->text("information");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lecture_schedules');
    }
};
