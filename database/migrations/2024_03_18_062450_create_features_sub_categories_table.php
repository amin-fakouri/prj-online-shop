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
        Schema::create('features_sub_categories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('features_id');
            $table->foreignId('sub_categories_id');
            $table->unique(['features_id', 'sub_categories_id'], 'fe_sub');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('features_sub_categories');
    }
};
