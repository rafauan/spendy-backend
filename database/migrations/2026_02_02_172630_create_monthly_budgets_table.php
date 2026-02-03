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
        Schema::create('monthly_budgets', function (Blueprint $table) {
            $table->id();
            $table->string('month', 7); // format: "YYYY-MM", np. "2024-02"
            $table->decimal('total_limit', 10, 2); // całkowity limit na miesiąc
            $table->decimal('spent', 10, 2)->default(0); // ile wydano (obliczane automatycznie)
            $table->boolean('alert_enabled')->default(true); // czy włączone alerty
            $table->integer('alert_threshold')->default(80); // % budżetu przy którym alert (np. 80%)
            $table->text('notes')->nullable();
            $table->timestamps();

            // Unique na miesiąc - jeden budżet na miesiąc
            $table->unique('month');
            $table->index('month');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('monthly_budgets');
    }
};
