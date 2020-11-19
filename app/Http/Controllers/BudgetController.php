<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Budget;

class BudgetController extends Controller
{
    public function index()
    {
        $budgets = Budget::all();

        return view('budget.index')->with('budgets', $budgets);
    }

    public function create()
    {
        return view('budget.create');
    }

    public function store(Request $request)
    {
        $budget = [
            'client' => $request->client,
            'seller' => $request->seller,
            'description' => $request->description,
            'price' => $request->price
        ];

        Budget::create($budget);

        return redirect()->action('BudgetController@index');
    }
}
