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
        Schema::create('committee_owner', function (Blueprint $table) {
            $table->id();
            $table->foreignId('committee_id')->constrained()->onDelete('cascade');
            $table->foreignId('owner_id')->constrained()->onDelete('cascade');
            $table->enum('role', ['chair', 'vice_chair', 'secretary', 'member', 'board_liaison'])->default('member');
            $table->text('expertise')->nullable();
            $table->date('term_start')->nullable();
            $table->date('term_end')->nullable();
            $table->boolean('is_active')->default(true);
            $table->string('team')->nullable();
            $table->text('team_responsibilities')->nullable();
            $table->json('team_projects')->nullable();
            $table->integer('team_priority')->default(0);
            $table->timestamps();
            
            $table->unique(['committee_id', 'owner_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('committee_owner');
    }
};
