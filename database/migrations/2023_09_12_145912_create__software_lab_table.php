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
        Schema::create('Software_Lab', function (Blueprint $table) {
            $table->id("softwareLab_id");

            $table->unsignedBigInteger('laboratorium_id');
            $table->foreign('laboratorium_id')->references('laboratorium_id')->on('laboratorium');

            $table->unsignedBigInteger('software_id');
            $table->foreign('software_id')->references('software_id')->on('softwares');

            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_software_lab');
    }
};
