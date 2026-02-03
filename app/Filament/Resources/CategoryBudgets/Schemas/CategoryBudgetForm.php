<?php

namespace App\Filament\Resources\CategoryBudgets\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class CategoryBudgetForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('category_id')
                    ->relationship('category', 'name')
                    ->required(),
                TextInput::make('month')
                    ->required(),
                TextInput::make('limit')
                    ->required()
                    ->numeric(),
                TextInput::make('spent')
                    ->required()
                    ->numeric()
                    ->default(0),
            ]);
    }
}
