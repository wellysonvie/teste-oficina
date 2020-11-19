<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'BudgetController@index');

Route::get('/orcamentos/novo', 'BudgetController@create');
Route::post('/orcamentos/store', 'BudgetController@store');

Route::get('/orcamentos/editar/{id}', 'BudgetController@edit');
Route::put('/orcamentos/update/{id}', 'BudgetController@update');

Route::get('/orcamentos/remover/{id}', 'BudgetController@destroy');