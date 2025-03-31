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
        Schema::create('owner_villa', function (Blueprint $table) {
            $table->id();
            $table->foreignId('owner_id')->constrained()->onDelete('cascade');
            $table->foreignId('villa_id')->constrained()->onDelete('cascade');
            $table->boolean('is_primary_owner')->default(false);
            $table->decimal('ownership_percentage', 5, 2)->default(100.00);
            $table->date('ownership_start_date');
            $table->date('ownership_end_date')->nullable();
            $table->timestamps();
            
            $table->unique(['owner_id', 'villa_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('owner_villa');
    }
};
