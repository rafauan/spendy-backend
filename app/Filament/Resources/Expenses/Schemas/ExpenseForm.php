<?php

namespace App\Filament\Resources\Expenses\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class ExpenseForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('category_id')
                    ->relationship('category', 'name')
                    ->required(),
                TextInput::make('amount')
                    ->required()
                    ->numeric(),
                TextInput::make('description'),
                DatePicker::make('expense_date')
                    ->required(),
                TextInput::make('receipt_photo'),
                Select::make('payment_method')
                    ->options([
                        'cash',
                        'card',
                        'blik',
                        'transfer',
                        'other'
                    ])
                    ->required()
                    ->default('card'),
                TextInput::make('merchant'),
                Toggle::make('is_recurring')
                    ->required(),
                Textarea::make('notes')
                    ->columnSpanFull(),
            ]);
    }
}
