<?php

namespace App\Filament\Resources\CategoryBudgets;

use App\Filament\Resources\CategoryBudgets\Pages\CreateCategoryBudget;
use App\Filament\Resources\CategoryBudgets\Pages\EditCategoryBudget;
use App\Filament\Resources\CategoryBudgets\Pages\ListCategoryBudgets;
use App\Filament\Resources\CategoryBudgets\Pages\ViewCategoryBudget;
use App\Filament\Resources\CategoryBudgets\Schemas\CategoryBudgetForm;
use App\Filament\Resources\CategoryBudgets\Schemas\CategoryBudgetInfolist;
use App\Filament\Resources\CategoryBudgets\Tables\CategoryBudgetsTable;
use App\Models\CategoryBudget;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class CategoryBudgetResource extends Resource
{
    protected static ?string $model = CategoryBudget::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedChartPie;

    protected static ?string $recordTitleAttribute = 'Category budgets';

    public static function form(Schema $schema): Schema
    {
        return CategoryBudgetForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return CategoryBudgetInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return CategoryBudgetsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListCategoryBudgets::route('/'),
            'create' => CreateCategoryBudget::route('/create'),
            'view' => ViewCategoryBudget::route('/{record}'),
            'edit' => EditCategoryBudget::route('/{record}/edit'),
        ];
    }
}
