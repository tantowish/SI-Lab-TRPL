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
        Schema::create('lab_reserves', function (Blueprint $table) {
            $table->id("lab_reserve_id");

            $table->unsignedBigInteger('reserve_id');
            $table->foreign('reserve_id')->references('reserve_id')->on('reserves');

            $table->unsignedBigInteger('lab_admin_id');
            $table->foreign('lab_admin_id')->references('lab_admin_id')->on('lab_administrators');

            $table->boolean("isApproved")->default(false);

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lab_reserves');
    }
};
