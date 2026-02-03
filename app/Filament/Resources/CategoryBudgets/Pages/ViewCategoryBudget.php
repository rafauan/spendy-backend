<?php

namespace App\Filament\Resources\CategoryBudgets\Pages;

use App\Filament\Resources\CategoryBudgets\CategoryBudgetResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewCategoryBudget extends ViewRecord
{
    protected static string $resource = CategoryBudgetResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
