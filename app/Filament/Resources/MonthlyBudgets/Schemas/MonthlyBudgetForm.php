<?php

namespace App\Filament\Resources\MonthlyBudgets\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class MonthlyBudgetForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('month')
                    ->required(),
                TextInput::make('total_limit')
                    ->required()
                    ->numeric(),
                TextInput::make('spent')
                    ->required()
                    ->numeric()
                    ->default(0),
                Toggle::make('alert_enabled')
                    ->required(),
                TextInput::make('alert_threshold')
                    ->required()
                    ->numeric()
                    ->default(80),
                Textarea::make('notes')
                    ->columnSpanFull(),
            ]);
    }
}
