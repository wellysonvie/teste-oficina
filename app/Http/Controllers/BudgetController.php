<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Budget;
use App\Http\Requests\StoreBudgetRequest;

class BudgetController extends Controller
{
    public function index(Request $request)
    {
        $name = $request->name;
        $initialDate = $request->initial_date;
        $finalDate = $request->final_date;

        if(!empty($name) or !empty($finalDate) or !empty($initialDate)){

            if(empty($finalDate)){
                $budgets = Budget::where('created_at', '>=', "{$initialDate} 00:00:00");
            }elseif(empty($initialDate)){
                $budgets = Budget::where('created_at', '<=', "{$finalDate} 23:59:59");
            }else{
                $budgets = Budget::whereBetween('created_at', ["{$initialDate} 00:00:00", "{$finalDate} 23:59:59"]);
            }

            if(!empty($name)){
                $budgets = $budgets->where('client', 'like', "%{$name}%")
                    ->orWhere('seller', 'like', "%{$name}%");
            }

        }else{
            $budgets = Budget::orderBy('created_at', 'desc');
        }

        $budgets = $budgets->orderBy('created_at', 'desc')->paginate(15);

        return view('budget.index')->with(['budgets' => $budgets, 'name' => $name, 'initialDate' => $initialDate, 'finalDate' => $finalDate]);
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

    public function store(StoreBudgetRequest $request)
    {
        $request->validated();

        $budget = new Budget();

        $budget->client = $request->client;
        $budget->seller = $request->seller;
        $budget->description = $request->description;
        $budget->price = $request->price;

        $budget->save();

        return redirect()->action('BudgetController@index')->with([
            'status' => 'success', 
            'msg' => 'Orçamento cadastrado com sucesso.'
        ]);
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

    public function update(StoreBudgetRequest $request, $id)
    {
        $request->validated();
        
        $budget = Budget::find($id);

        $budget->client = $request->client;
        $budget->seller = $request->seller;
        $budget->description = $request->description;
        $budget->price = $request->price;

        $budget->save();

        return redirect()->action('BudgetController@index')->with([
            'status' => 'success', 
            'msg' => 'Orçamento atualizado com sucesso.'
        ]);
    }

    public function destroy($id)
    {
        $budget = Budget::find($id);

        if(!empty($budget)){
            $budget->delete();
        }

        return redirect()->action('BudgetController@index')->with([
            'status' => 'success', 
            'msg' => 'Orçamento deletado com sucesso.'
        ]);
    }

}
