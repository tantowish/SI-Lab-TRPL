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
        Schema::create('software_lab', function (Blueprint $table) {
            $table->id("software_lab_id");

            $table->string('laboratorium_id', 50);
            $table->foreign('laboratorium_id')->references('laboratorium_id')->on('laboratorium');

            $table->unsignedBigInteger('software_id');
            $table->foreign('software_id')->references('software_id')->on('software');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
