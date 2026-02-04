<?php

namespace App\Http\Controllers;

use App\Http\Resources\ExpenseResource;
use App\Models\Expense;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class ExpenseController extends Controller
{
    public function index(): AnonymousResourceCollection
    {
        $expenses = Expense::query()
            ->with('category')
            ->latest('expense_date')
            ->get();

        return ExpenseResource::collection($expenses);
    }
}
