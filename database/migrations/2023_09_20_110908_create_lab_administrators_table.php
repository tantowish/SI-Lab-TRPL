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
        Schema::create('lab_administrators', function (Blueprint $table) {
            $table->id("lab_admin_id");
            $table->string("name", 100);
            $table->string("username", 50);
            $table->string("password", 50);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lab_administrators');
    }
};
