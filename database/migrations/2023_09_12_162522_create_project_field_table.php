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
        Schema::create('Project_Field', function (Blueprint $table) {
            $table->id('projectField_id');

            $table->unsignedBigInteger('project_id');
            $table->foreign('project_id')->references('project_id')->on('projects');

            $table->unsignedBigInteger('field_id');
            $table->foreign('field_id')->references('field_id')->on('fields');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('project_field');
    }
};
