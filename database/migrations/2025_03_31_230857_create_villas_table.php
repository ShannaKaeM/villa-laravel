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
        Schema::create('villas', function (Blueprint $table) {
            $table->id();
            $table->string('unit_number')->unique();
            $table->string('display_name');
            $table->text('description')->nullable();
            $table->enum('floorplan_type', ['1.1', '1.2', '2.1', '2.2', '2.3', '3.1', '3.2']);
            $table->enum('view_type', ['ocean', 'pool', 'garden', 'city']);
            $table->integer('floor_level');
            $table->integer('stories')->default(1);
            $table->integer('bedrooms');
            $table->decimal('bathrooms', 2, 1);
            $table->integer('square_feet')->nullable();
            $table->boolean('is_featured')->default(false);
            $table->boolean('is_for_rent')->default(false);
            $table->boolean('is_for_sale')->default(false);
            $table->decimal('rental_rate', 10, 2)->nullable();
            $table->decimal('sale_price', 12, 2)->nullable();
            
            // Image fields
            $table->string('featured_image')->nullable();
            $table->json('gallery_images')->nullable();
            $table->string('floorplan_image')->nullable();
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('villas');
    }
};
