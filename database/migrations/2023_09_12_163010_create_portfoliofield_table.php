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
        Schema::create('portfoliofield', function (Blueprint $table) {
            $table->id('portfoliofield_id');

            $table->unsignedBigInteger('portfolio_id');
            $table->foreign('portfolio_id')->references('portfolio_id')->on('portfolioTA');

            $table->unsignedBigInteger('field_id');
            $table->foreign('field_id')->references('field_id')->on('fields');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('portfoliofield');
    }
};
