<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\CategoryBudget;
use Illuminate\Database\Seeder;

class CategoryBudgetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = Category::pluck('id', 'name')->toArray();

        $budgets = [
            // Styczeń 2026
            [
                'category_id' => $categories['Jedzenie i napoje'],
                'month' => '2026-01',
                'limit' => 1500.00,
                'spent' => 1245.40,
            ],
            [
                'category_id' => $categories['Transport'],
                'month' => '2026-01',
                'limit' => 500.00,
                'spent' => 389.60,
            ],
            [
                'category_id' => $categories['Zakupy'],
                'month' => '2026-01',
                'limit' => 800.00,
                'spent' => 548.99,
            ],
            [
                'category_id' => $categories['Rozrywka'],
                'month' => '2026-01',
                'limit' => 600.00,
                'spent' => 343.99,
            ],
            [
                'category_id' => $categories['Rachunki'],
                'month' => '2026-01',
                'limit' => 1000.00,
                'spent' => 464.00,
            ],

            // Luty 2026
            [
                'category_id' => $categories['Jedzenie i napoje'],
                'month' => '2026-02',
                'limit' => 1500.00,
                'spent' => 224.90,
            ],
            [
                'category_id' => $categories['Transport'],
                'month' => '2026-02',
                'limit' => 500.00,
                'spent' => 239.60,
            ],
            [
                'category_id' => $categories['Zakupy'],
                'month' => '2026-02',
                'limit' => 800.00,
                'spent' => 248.99,
            ],
            [
                'category_id' => $categories['Rozrywka'],
                'month' => '2026-02',
                'limit' => 600.00,
                'spent' => 84.99,
            ],
            [
                'category_id' => $categories['Zdrowie'],
                'month' => '2026-02',
                'limit' => 400.00,
                'spent' => 215.00,
            ],
            [
                'category_id' => $categories['Rachunki'],
                'month' => '2026-02',
                'limit' => 1000.00,
                'spent' => 464.00,
            ],
            [
                'category_id' => $categories['Sport i fitness'],
                'month' => '2026-02',
                'limit' => 300.00,
                'spent' => 208.00,
            ],
            [
                'category_id' => $categories['Edukacja'],
                'month' => '2026-02',
                'limit' => 200.00,
                'spent' => 79.00,
            ],
            [
                'category_id' => $categories['Prezenty'],
                'month' => '2026-02',
                'limit' => 300.00,
                'spent' => 150.00,
            ],
            [
                'category_id' => $categories['Inne'],
                'month' => '2026-02',
                'limit' => 200.00,
                'spent' => 25.00,
            ],
        ];

        foreach ($budgets as $budget) {
            CategoryBudget::create($budget);
        }
    }
}
