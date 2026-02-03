<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Expense;
use Illuminate\Database\Seeder;

class ExpenseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = Category::pluck('id', 'name')->toArray();

        $expenses = [
            // Jedzenie i napoje
            [
                'category_id' => $categories['Jedzenie i napoje'],
                'amount' => 45.50,
                'description' => 'Zakupy spożywcze',
                'expense_date' => now()->subDays(1),
                'payment_method' => 'card',
                'merchant' => 'Biedronka',
                'is_recurring' => false,
                'notes' => null,
            ],
            [
                'category_id' => $categories['Jedzenie i napoje'],
                'amount' => 32.00,
                'description' => 'Obiad w pracy',
                'expense_date' => now()->subDays(2),
                'payment_method' => 'card',
                'merchant' => 'Restauracja Smaczna',
                'is_recurring' => false,
                'notes' => null,
            ],
            [
                'category_id' => $categories['Jedzenie i napoje'],
                'amount' => 128.90,
                'description' => 'Tygodniowe zakupy',
                'expense_date' => now()->subDays(5),
                'payment_method' => 'card',
                'merchant' => 'Lidl',
                'is_recurring' => true,
                'notes' => 'Zakupy na cały tydzień',
            ],
            [
                'category_id' => $categories['Jedzenie i napoje'],
                'amount' => 18.50,
                'description' => 'Kawa i ciastko',
                'expense_date' => now()->subDays(3),
                'payment_method' => 'blik',
                'merchant' => 'Starbucks',
                'is_recurring' => false,
                'notes' => null,
            ],

            // Transport
            [
                'category_id' => $categories['Transport'],
                'amount' => 150.00,
                'description' => 'Paliwo',
                'expense_date' => now()->subDays(4),
                'payment_method' => 'card',
                'merchant' => 'Orlen',
                'is_recurring' => true,
                'notes' => 'Pełny bak',
            ],
            [
                'category_id' => $categories['Transport'],
                'amount' => 4.60,
                'description' => 'Bilet autobusowy',
                'expense_date' => now()->subDays(1),
                'payment_method' => 'blik',
                'merchant' => 'MPK',
                'is_recurring' => false,
                'notes' => null,
            ],
            [
                'category_id' => $categories['Transport'],
                'amount' => 85.00,
                'description' => 'Bilet miesięczny',
                'expense_date' => now()->subDays(15),
                'payment_method' => 'transfer',
                'merchant' => 'ZTM',
                'is_recurring' => true,
                'notes' => 'Bilet na styczeń',
            ],

            // Zakupy
            [
                'category_id' => $categories['Zakupy'],
                'amount' => 199.00,
                'description' => 'Koszula i spodnie',
                'expense_date' => now()->subDays(7),
                'payment_method' => 'card',
                'merchant' => 'Reserved',
                'is_recurring' => false,
                'notes' => null,
            ],
            [
                'category_id' => $categories['Zakupy'],
                'amount' => 49.99,
                'description' => 'Akcesoria do telefonu',
                'expense_date' => now()->subDays(10),
                'payment_method' => 'blik',
                'merchant' => 'Allegro',
                'is_recurring' => false,
                'notes' => 'Etui i szkło ochronne',
            ],

            // Rozrywka
            [
                'category_id' => $categories['Rozrywka'],
                'amount' => 35.00,
                'description' => 'Bilet do kina',
                'expense_date' => now()->subDays(6),
                'payment_method' => 'blik',
                'merchant' => 'Cinema City',
                'is_recurring' => false,
                'notes' => 'Film wieczorem',
            ],
            [
                'category_id' => $categories['Rozrywka'],
                'amount' => 49.99,
                'description' => 'Subskrypcja Netflix',
                'expense_date' => now()->subDays(12),
                'payment_method' => 'card',
                'merchant' => 'Netflix',
                'is_recurring' => true,
                'notes' => 'Plan Premium',
            ],
            [
                'category_id' => $categories['Rozrywka'],
                'amount' => 159.00,
                'description' => 'Gra na PS5',
                'expense_date' => now()->subDays(20),
                'payment_method' => 'card',
                'merchant' => 'PlayStation Store',
                'is_recurring' => false,
                'notes' => null,
            ],

            // Zdrowie
            [
                'category_id' => $categories['Zdrowie'],
                'amount' => 65.00,
                'description' => 'Leki na przeziębienie',
                'expense_date' => now()->subDays(8),
                'payment_method' => 'cash',
                'merchant' => 'Apteka DOZ',
                'is_recurring' => false,
                'notes' => null,
            ],
            [
                'category_id' => $categories['Zdrowie'],
                'amount' => 150.00,
                'description' => 'Wizyta u dentysty',
                'expense_date' => now()->subDays(14),
                'payment_method' => 'card',
                'merchant' => 'Medicover Stomatologia',
                'is_recurring' => false,
                'notes' => 'Kontrola okresowa',
            ],

            // Rachunki
            [
                'category_id' => $categories['Rachunki'],
                'amount' => 320.00,
                'description' => 'Rachunek za prąd',
                'expense_date' => now()->subDays(18),
                'payment_method' => 'transfer',
                'merchant' => 'PGE',
                'is_recurring' => true,
                'notes' => 'Styczeń 2026',
            ],
            [
                'category_id' => $categories['Rachunki'],
                'amount' => 89.00,
                'description' => 'Internet',
                'expense_date' => now()->subDays(16),
                'payment_method' => 'transfer',
                'merchant' => 'Orange',
                'is_recurring' => true,
                'notes' => null,
            ],
            [
                'category_id' => $categories['Rachunki'],
                'amount' => 55.00,
                'description' => 'Telefon komórkowy',
                'expense_date' => now()->subDays(16),
                'payment_method' => 'transfer',
                'merchant' => 'Play',
                'is_recurring' => true,
                'notes' => 'Abonament',
            ],

            // Sport i fitness
            [
                'category_id' => $categories['Sport i fitness'],
                'amount' => 119.00,
                'description' => 'Karnet na siłownię',
                'expense_date' => now()->subDays(25),
                'payment_method' => 'card',
                'merchant' => 'MultiSport',
                'is_recurring' => true,
                'notes' => 'Miesięczny karnet',
            ],
            [
                'category_id' => $categories['Sport i fitness'],
                'amount' => 89.00,
                'description' => 'Buty do biegania',
                'expense_date' => now()->subDays(30),
                'payment_method' => 'card',
                'merchant' => 'Decathlon',
                'is_recurring' => false,
                'notes' => 'Promocja',
            ],

            // Edukacja
            [
                'category_id' => $categories['Edukacja'],
                'amount' => 79.00,
                'description' => 'Kurs online',
                'expense_date' => now()->subDays(22),
                'payment_method' => 'card',
                'merchant' => 'Udemy',
                'is_recurring' => false,
                'notes' => 'Kurs programowania',
            ],

            // Prezenty
            [
                'category_id' => $categories['Prezenty'],
                'amount' => 150.00,
                'description' => 'Prezent urodzinowy',
                'expense_date' => now()->subDays(11),
                'payment_method' => 'card',
                'merchant' => 'Empik',
                'is_recurring' => false,
                'notes' => 'Prezent dla mamy',
            ],

            // Inne
            [
                'category_id' => $categories['Inne'],
                'amount' => 25.00,
                'description' => 'Paczkomat',
                'expense_date' => now()->subDays(9),
                'payment_method' => 'blik',
                'merchant' => 'InPost',
                'is_recurring' => false,
                'notes' => null,
            ],
        ];

        foreach ($expenses as $expense) {
            Expense::create($expense);
        }
    }
}
