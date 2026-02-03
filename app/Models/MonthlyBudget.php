<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MonthlyBudget extends Model
{
    protected $fillable = [
        'month',
        'total_limit',
        'spent',
        'alert_enabled',
        'alert_threshold',
        'notes',
    ];

    /**
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'total_limit' => 'decimal:2',
            'spent' => 'decimal:2',
            'alert_enabled' => 'boolean',
            'alert_threshold' => 'integer',
        ];
    }
}
