<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Budget;

class BudgetController extends Controller
{
    public function index()
    {
        $budgets = Budget::all();

        return view('budget/index')->with('budgets', $budgets);
    }
}
