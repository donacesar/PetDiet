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
        Schema::create('full_orders', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->string('name');
            $table->string('phone');
            $table->string('email')->nullable();
            $table->unsignedBigInteger('favorite_phone')->nullable();$table->unsignedBigInteger('favorite_email')->nullable();$table->unsignedBigInteger('favorite_whatsapp')->nullable();$table->unsignedBigInteger('favorite_telegram')->nullable();
            $table->string('pet_name');
            $table->string('age');
            $table->unsignedBigInteger('pet_sex');
            $table->tinyText('sterilized')->nullable();
            $table->string('breed');
            $table->string('weight');
            $table->tinyText('parents_weight')->nullable();
            $table->unsignedBigInteger('condition_index');
            $table->unsignedBigInteger('activity');
            $table->text('daily_activity')->nullable();
            $table->tinyText('location_condition');
            $table->tinyText('pet_shit');
            $table->tinyText('food_before');
            $table->tinyText('food_with_you');
            $table->tinyText('food_with_other')->nullable();
            $table->tinyText('favorite_food');
            $table->tinyText('intolerance');
            $table->text('principled_views')->nullable();
            $table->tinyText('meat_fish_egg')->nullable();
            $table->tinyText('milk')->nullable();
            $table->tinyText('cereals_potato_pasta')->nullable();
            $table->tinyText('vegetables_fruits')->nullable();
            $table->tinyText('oils_fats')->nullable();
            $table->tinyText('treats_snacks_bones')->nullable();
            $table->tinyText('supplements_vitamins_pastes')->nullable();
            $table->tinyText('other_products')->nullable();
            $table->text('healing')->nullable();
            $table->text('medicament')->nullable();
            $table->timestamps();
            $table->boolean('finished')->nullable();

            $table->foreign('pet_sex')->references('category_id')->on('pet_sexes');
            $table->foreign('condition_index')->references('category_id')->on('condition_indexes');
            $table->foreign('activity')->references('category_id')->on('activities');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('full_orders');
    }
};
