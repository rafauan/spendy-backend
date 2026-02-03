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
        Schema::create('expenses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->constrained()->onDelete('cascade');
            $table->decimal('amount', 10, 2); // kwota wydatku
            $table->string('description')->nullable(); // opcjonalny opis
            $table->date('expense_date'); // data wydatku (może być inna niż created_at)
            $table->string('receipt_photo')->nullable(); // ścieżka do zdjęcia paragonu
            $table->enum('payment_method', ['cash', 'card', 'blik', 'transfer', 'other'])->default('card');
            $table->string('merchant')->nullable(); // nazwa sklepu/miejsca
            $table->boolean('is_recurring')->default(false); // czy to wydatek cykliczny
            $table->text('notes')->nullable(); // dodatkowe notatki
            $table->timestamps();
            $table->softDeletes(); // miękkie usuwanie (możliwość przywrócenia)

            // Indeksy dla szybszego wyszukiwania
            $table->index('expense_date');
            $table->index(['category_id', 'expense_date']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('expenses');
    }
};
