<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Jedzenie i napoje',
                'icon' => '🍔',
                'color' => '#FF5733',
                'budget_limit' => 1500.00,
                'sort_order' => 1,
                'is_active' => true,
            ],
            [
                'name' => 'Transport',
                'icon' => '🚗',
                'color' => '#3B82F6',
                'budget_limit' => 500.00,
                'sort_order' => 2,
                'is_active' => true,
            ],
            [
                'name' => 'Zakupy',
                'icon' => '🛍️',
                'color' => '#F59E0B',
                'budget_limit' => 800.00,
                'sort_order' => 3,
                'is_active' => true,
            ],
            [
                'name' => 'Rozrywka',
                'icon' => '🎮',
                'color' => '#8B5CF6',
                'budget_limit' => 600.00,
                'sort_order' => 4,
                'is_active' => true,
            ],
            [
                'name' => 'Zdrowie',
                'icon' => '💊',
                'color' => '#10B981',
                'budget_limit' => 400.00,
                'sort_order' => 5,
                'is_active' => true,
            ],
            [
                'name' => 'Rachunki',
                'icon' => '📄',
                'color' => '#EF4444',
                'budget_limit' => 1000.00,
                'sort_order' => 6,
                'is_active' => true,
            ],
            [
                'name' => 'Sport i fitness',
                'icon' => '💪',
                'color' => '#06B6D4',
                'budget_limit' => 300.00,
                'sort_order' => 7,
                'is_active' => true,
            ],
            [
                'name' => 'Edukacja',
                'icon' => '📚',
                'color' => '#6366F1',
                'budget_limit' => 200.00,
                'sort_order' => 8,
                'is_active' => true,
            ],
            [
                'name' => 'Prezenty',
                'icon' => '🎁',
                'color' => '#EC4899',
                'budget_limit' => 300.00,
                'sort_order' => 9,
                'is_active' => true,
            ],
            [
                'name' => 'Inne',
                'icon' => '📌',
                'color' => '#6B7280',
                'budget_limit' => null,
                'sort_order' => 10,
                'is_active' => true,
            ],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
