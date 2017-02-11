<?php
Route::group(['middleware' => 'web', 'prefix' => 'balancesheet', 'namespace' => 'Modules\BalanceSheet\Http\Controllers'], function () {
    Route::get('/', 'BalanceSheetController@index');
});


Route::group(['middleware' => 'web', 'prefix' => 'balancesheet', 'namespace' => 'Modules\BalanceSheet\Http\Controllers'], function () {

    Route::get('balanceshet', ['as' => 'balancesheet.index', 'uses' => 'BalanceSheetController@index']);
    Route::post('balancesheet', ['as' => 'balancesheet.store', 'uses' => 'BalanceSheetController@store']);
    Route::get('balancesheet/create', ['as' => 'balancesheet.create', 'uses' => 'BalanceSheetController@create']);
    Route::put('balancesheet/{expenses}', ['as' => 'balancesheet.update', 'uses' => 'BalanceSheetController@update']);
    Route::patch('balancesheet/{expenses}', ['as' => 'balancesheet.update', 'uses' => 'BalanceSheetController@update']);
    Route::delete('balancesheet/{expenses}', ['as' => 'balancesheet.destroy', 'uses' => 'BalanceSheetController@destroy']);
    Route::get('balancesheet/{expenses}', ['as' => 'balancesheet.show', 'uses' => 'BalanceSheetController@show']);
    Route::get('balancesheet/{expenses}/edit', ['as' => 'balancesheet.edit', 'uses' => 'BalanceSheetController@edit']);


    Route::get('balancesheet/expenseCategories', ['as' => 'balancesheet.expenseCategories.index', 'uses' => 'ExpenseCategoriesController@index']);
    Route::post('balancesheet/expenseCategories', ['as' => 'balancesheet.expenseCategories.store', 'uses' => 'ExpenseCategoriesController@store']);
    Route::get('balancesheet/expenseCategories/create', ['as' => 'balancesheet.expenseCategories.create', 'uses' => 'ExpenseCategoriesController@create']);
    Route::put('balancesheet/expenseCategories/{expenseCategories}', ['as' => 'balancesheet.expenseCategories.update', 'uses' => 'ExpenseCategoriesController@update']);
    Route::patch('balancesheet/expenseCategories/{expenseCategories}', ['as' => 'balancesheet.expenseCategories.update', 'uses' => 'ExpenseCategoriesController@update']);
    Route::delete('balancesheet/expenseCategories/{expenseCategories}', ['as' => 'balancesheet.expenseCategories.destroy', 'uses' => 'ExpenseCategoriesController@destroy']);
    Route::get('balancesheet/expenseCategories/{expenseCategories}', ['as' => 'balancesheet.expenseCategories.show', 'uses' => 'ExpenseCategoriesController@show']);
    Route::get('balancesheet/expenseCategories/{expenseCategories}/edit', ['as' => 'balancesheet.expenseCategories.edit', 'uses' => 'ExpenseCategoriesController@edit']);


    Route::get('balancesheet/expenses', ['as' => 'balancesheet.expenses.index', 'uses' => 'ExpensesController@index']);
    Route::post('balancesheet/expenses', ['as' => 'balancesheet.expenses.store', 'uses' => 'ExpensesController@store']);
    Route::get('balancesheet/expenses/create', ['as' => 'balancesheet.expenses.create', 'uses' => 'ExpensesController@create']);
    Route::put('balancesheet/expenses/{expenses}', ['as' => 'balancesheet.expenses.update', 'uses' => 'ExpensesController@update']);
    Route::patch('balancesheet/expenses/{expenses}', ['as' => 'balancesheet.expenses.update', 'uses' => 'ExpensesController@update']);
    Route::delete('balancesheet/expenses/{expenses}', ['as' => 'balancesheet.expenses.destroy', 'uses' => 'ExpensesController@destroy']);
    Route::get('balancesheet/expenses/{expenses}', ['as' => 'balancesheet.expenses.show', 'uses' => 'ExpensesController@show']);
    Route::get('balancesheet/expenses/{expenses}/edit', ['as' => 'balancesheet.expenses.edit', 'uses' => 'ExpensesController@edit']);
});





