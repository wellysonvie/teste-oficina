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

    public function show($id)
    {
        $budget = Budget::find($id);

        if(!empty($budget)){
            return view('budget.show')->with('budget', $budget);
        }else{
            return redirect()->action('BudgetController@index');
        }
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

    public function edit($id)
    {
        $budget = Budget::find($id);

        if(!empty($budget)){
            return view('budget.edit')->with('budget', $budget);
        }else{
            return redirect()->action('BudgetController@index');
        }
    }

    public function update(Request $request, $id)
    {
        $budget = Budget::find($id);

        $budget->client = $request->client;
        $budget->seller = $request->seller;
        $budget->description = $request->description;
        $budget->price = $request->price;

        $budget->save();

        return redirect()->action('BudgetController@index');
    }

    public function destroy($id)
    {
        $budget = Budget::find($id);

        if(!empty($budget)){
            $budget->delete();
        }

        return redirect()->action('BudgetController@index');
    }

}
