<?php

namespace App\Filament\Resources\MonthlyBudgets\Schemas;

use Filament\Infolists\Components\IconEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class MonthlyBudgetInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('month'),
                TextEntry::make('total_limit')
                    ->numeric(),
                TextEntry::make('spent')
                    ->numeric(),
                IconEntry::make('alert_enabled')
                    ->boolean(),
                TextEntry::make('alert_threshold')
                    ->numeric(),
                TextEntry::make('notes')
                    ->placeholder('-')
                    ->columnSpanFull(),
                TextEntry::make('created_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->dateTime()
                    ->placeholder('-'),
            ]);
    }
}
