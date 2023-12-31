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
        Schema::create('projects', function (Blueprint $table) {
            $table->id("project_id");
            $table->string("project_name", 150);
            $table->date('start_date');
            $table->date('end_date')->nullable();
            $table->text('description');
            $table->text('document_link');

            $table->unsignedBigInteger('applicant');
            $table->foreign('applicant')->references('user_id')->on('users');

            $table->enum('status', ['published','archive','waiting', 'rejected'])->default('waiting');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
