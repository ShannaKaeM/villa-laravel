<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->foreignId('committee_id')->constrained()->cascadeOnDelete();
            $table->foreignId('parent_project_id')->nullable()->constrained('projects')->nullOnDelete();
            $table->string('title');
            $table->text('description')->nullable();
            $table->enum('status', ['draft', 'in_progress', 'review', 'approved', 'completed']);
            $table->enum('priority', ['low', 'medium', 'high', 'urgent']);
            $table->date('start_date');
            $table->date('end_date')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('project_id')->constrained()->cascadeOnDelete();
            $table->string('title');
            $table->text('description')->nullable();
            $table->enum('status', ['todo', 'in_progress', 'review', 'completed']);
            $table->foreignId('assigned_to')->nullable()->constrained('owners')->nullOnDelete();
            $table->date('due_date')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('project_collaborators', function (Blueprint $table) {
            $table->id();
            $table->foreignId('project_id')->constrained()->cascadeOnDelete();
            $table->foreignId('committee_id')->constrained()->cascadeOnDelete();
            $table->enum('role', ['viewer', 'contributor', 'manager']);
            $table->timestamps();

            $table->unique(['project_id', 'committee_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('project_collaborators');
        Schema::dropIfExists('tasks');
        Schema::dropIfExists('projects');
    }
};
