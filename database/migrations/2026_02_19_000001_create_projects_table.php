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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('client_name');
            $table->text('summary')->nullable();
            $table->string('status', 20)->default('pending');
            $table->string('priority', 20)->default('medium');
            $table->unsignedTinyInteger('progress')->default(0);
            $table->decimal('budget', 12, 2)->nullable();
            $table->decimal('spent_budget', 12, 2)->nullable();
            $table->date('due_date')->nullable();
            $table->boolean('is_template')->default(false);
            $table->timestamps();

            $table->index(['is_template', 'status']);
            $table->index('priority');
            $table->index('due_date');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
