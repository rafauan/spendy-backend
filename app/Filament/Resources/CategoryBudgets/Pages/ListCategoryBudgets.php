<?php

namespace App\Filament\Resources\CategoryBudgets\Pages;

use App\Filament\Resources\CategoryBudgets\CategoryBudgetResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListCategoryBudgets extends ListRecords
{
    protected static string $resource = CategoryBudgetResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
