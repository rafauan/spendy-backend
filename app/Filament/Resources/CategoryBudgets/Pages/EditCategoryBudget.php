<?php

namespace App\Filament\Resources\CategoryBudgets\Pages;

use App\Filament\Resources\CategoryBudgets\CategoryBudgetResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditCategoryBudget extends EditRecord
{
    protected static string $resource = CategoryBudgetResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
