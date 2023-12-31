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
        Schema::create('inventories', function (Blueprint $table) {
            $table->id("inventory_id");

            $table->string('laboratorium_id', 50);
            $table->foreign('laboratorium_id')->references('laboratorium_id')->on('laboratorium');

            $table->string("item_name",100);
            $table->string("no_item",100);
            $table->integer('good');
            $table->integer('bad');
            $table->string("information",100)->nullable();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inventories');
    }
};
