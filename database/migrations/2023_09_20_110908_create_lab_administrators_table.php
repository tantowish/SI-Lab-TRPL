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
            $table->string("email", 100);
            $table->string("username", 100);
            $table->string("password");
            $table->string("expertise");
            $table->string("NIKA");
            $table->text("description");
            $table->string("photo")->nullable();
            $table->timestamps();
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
