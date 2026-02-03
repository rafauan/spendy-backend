<?php

namespace Database\Seeders;

use App\Models\MonthlyBudget;
use Illuminate\Database\Seeder;

class MonthlyBudgetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $budgets = [
            [
                'month' => '2026-01',
                'total_limit' => 5000.00,
                'spent' => 3245.50,
                'alert_enabled' => true,
                'alert_threshold' => 80,
                'notes' => 'Budżet na styczeń - początek roku',
            ],
            [
                'month' => '2026-02',
                'total_limit' => 5500.00,
                'spent' => 1845.48,
                'alert_enabled' => true,
                'alert_threshold' => 75,
                'notes' => 'Zwiększony budżet na luty',
            ],
            [
                'month' => '2025-12',
                'total_limit' => 6000.00,
                'spent' => 5890.00,
                'alert_enabled' => true,
                'alert_threshold' => 90,
                'notes' => 'Grudzień - święta i wydatki świąteczne',
            ],
            [
                'month' => '2025-11',
                'total_limit' => 4500.00,
                'spent' => 4320.75,
                'alert_enabled' => false,
                'alert_threshold' => 80,
                'notes' => null,
            ],
        ];

        foreach ($budgets as $budget) {
            MonthlyBudget::create($budget);
        }
    }
}
