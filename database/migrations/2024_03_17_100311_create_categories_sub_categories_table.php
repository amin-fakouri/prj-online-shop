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
        Schema::create('categories_sub_categories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('categories_id');
            $table->foreignId('sub_categories_id');
            $table->unique(['categories_id', 'sub_categories_id'], 'cat_sub');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories_sub_categories');
    }
};
