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
        Schema::create('buy_products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id');
            $table->string('f_name');
            $table->string('l_name');
            $table->string('phone_number');
            $table->string('your_location');
            $table->string('n_code');
            $table->string('name_product');
            $table->string('price');
            $table->string('code_product');
            $table->string('time_send');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('buy_products');
    }
};
