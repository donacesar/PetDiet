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
        Schema::table('small_orders', function (Blueprint $table) {
            $table->foreign('favorite_connection')->references('category_id')->on('favorite_connections');
            $table->foreign('pet_sex')->references('category_id')->on('pet_sexes');
            $table->foreign('service')->references('category_id')->on('services');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('small_orders', function (Blueprint $table) {
            //
        });
    }
};
