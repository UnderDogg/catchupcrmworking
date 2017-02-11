<?php

Route::group(['middleware' => 'web', 'prefix' => '', 'namespace' => 'Modules\BalanceSheet\Http\Controllers'], function()
{

   Route::get('balanceshet', ['as'=> 'balancesheet.index', 'uses' => 'Balancesheet\Balancesheet@index']);
   Route::post('balancesheet', ['as'=> 'balancesheet.store', 'uses' => 'Balancesheet\Balancesheet@store']);
   Route::get('balancesheet/create', ['as'=> 'balancesheet.create', 'uses' => 'Balancesheet\Balancesheet@create']);
   Route::put('balancesheet/{expenses}', ['as'=> 'balancesheet.update', 'uses' => 'Balancesheet\Balancesheet@update']);
   Route::patch('balancesheet/{expenses}', ['as'=> 'balancesheet.update', 'uses' => 'Balancesheet\Balancesheet@update']);
   Route::delete('balancesheet/{expenses}', ['as'=> 'balancesheet.destroy', 'uses' => 'Balancesheet\Balancesheet@destroy']);
   Route::get('balancesheet/{expenses}', ['as'=> 'balancesheet.show', 'uses' => 'Balancesheet\Balancesheet@show']);
   Route::get('balancesheet/{expenses}/edit', ['as'=> 'balancesheet.edit', 'uses' => 'Balancesheet\Balancesheet@edit']);


   Route::get('balancesheet/expenseCategories', ['as'=> 'balancesheet.expenseCategories.index', 'uses' => 'Balancesheet\ExpenseCategoriesController@index']);
   Route::post('balancesheet/expenseCategories', ['as'=> 'balancesheet.expenseCategories.store', 'uses' => 'Balancesheet\ExpenseCategoriesController@store']);
   Route::get('balancesheet/expenseCategories/create', ['as'=> 'balancesheet.expenseCategories.create', 'uses' => 'Balancesheet\ExpenseCategoriesController@create']);
   Route::put('balancesheet/expenseCategories/{expenseCategories}', ['as'=> 'balancesheet.expenseCategories.update', 'uses' => 'Balancesheet\ExpenseCategoriesController@update']);
   Route::patch('balancesheet/expenseCategories/{expenseCategories}', ['as'=> 'balancesheet.expenseCategories.update', 'uses' => 'Balancesheet\ExpenseCategoriesController@update']);
   Route::delete('balancesheet/expenseCategories/{expenseCategories}', ['as'=> 'balancesheet.expenseCategories.destroy', 'uses' => 'Balancesheet\ExpenseCategoriesController@destroy']);
   Route::get('balancesheet/expenseCategories/{expenseCategories}', ['as'=> 'balancesheet.expenseCategories.show', 'uses' => 'Balancesheet\ExpenseCategoriesController@show']);
   Route::get('balancesheet/expenseCategories/{expenseCategories}/edit', ['as'=> 'balancesheet.expenseCategories.edit', 'uses' => 'Balancesheet\ExpenseCategoriesController@edit']);


   Route::get('balancesheet/expenses', ['as'=> 'balancesheet.expenses.index', 'uses' => 'Balancesheet\ExpensesController@index']);
   Route::post('balancesheet/expenses', ['as'=> 'balancesheet.expenses.store', 'uses' => 'Balancesheet\ExpensesController@store']);
   Route::get('balancesheet/expenses/create', ['as'=> 'balancesheet.expenses.create', 'uses' => 'Balancesheet\ExpensesController@create']);
   Route::put('balancesheet/expenses/{expenses}', ['as'=> 'balancesheet.expenses.update', 'uses' => 'Balancesheet\ExpensesController@update']);
   Route::patch('balancesheet/expenses/{expenses}', ['as'=> 'balancesheet.expenses.update', 'uses' => 'Balancesheet\ExpensesController@update']);
   Route::delete('balancesheet/expenses/{expenses}', ['as'=> 'balancesheet.expenses.destroy', 'uses' => 'Balancesheet\ExpensesController@destroy']);
   Route::get('balancesheet/expenses/{expenses}', ['as'=> 'balancesheet.expenses.show', 'uses' => 'Balancesheet\ExpensesController@show']);
   Route::get('balancesheet/expenses/{expenses}/edit', ['as'=> 'balancesheet.expenses.edit', 'uses' => 'Balancesheet\ExpensesController@edit']);
});





