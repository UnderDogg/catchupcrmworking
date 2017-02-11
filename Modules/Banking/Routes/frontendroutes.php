<?php

Route::group(['middleware' => 'web', 'prefix' => '', 'namespace' => 'Modules\Banking\Http\Controllers'], function () {
    Route::get('banking', ['as' => 'banking.index', 'uses' => 'Banking\PaymentsController@index']);
    Route::post('banking', ['as' => 'banking.store', 'uses' => 'Banking\PaymentsController@store']);
    Route::get('banking/create', ['as' => 'banking.create', 'uses' => 'Banking\PaymentsController@create']);
    Route::put('banking/{payments}', ['as' => 'banking.update', 'uses' => 'Banking\PaymentsController@update']);
    Route::patch('banking/{payments}', ['as' => 'banking.update', 'uses' => 'Banking\PaymentsController@update']);
    Route::delete('banking/{payments}', ['as' => 'banking.destroy', 'uses' => 'Banking\PaymentsController@destroy']);
    Route::get('banking/{payments}', ['as' => 'banking.show', 'uses' => 'Banking\PaymentsController@show']);
    Route::get('banking/{payments}/edit', ['as' => 'banking.edit', 'uses' => 'Banking\PaymentsController@edit']);


    Route::get('banking/payments', ['as' => 'banking.payments.index', 'uses' => 'Banking\PaymentsController@index']);
    Route::post('banking/payments', ['as' => 'banking.payments.store', 'uses' => 'Banking\PaymentsController@store']);
    Route::get('banking/payments/create', ['as' => 'banking.payments.create', 'uses' => 'Banking\PaymentsController@create']);
    Route::put('banking/payments/{payments}', ['as' => 'banking.payments.update', 'uses' => 'Banking\PaymentsController@update']);
    Route::patch('banking/payments/{payments}', ['as' => 'banking.payments.update', 'uses' => 'Banking\PaymentsController@update']);
    Route::delete('banking/payments/{payments}', ['as' => 'banking.payments.destroy', 'uses' => 'Banking\PaymentsController@destroy']);
    Route::get('banking/payments/{payments}', ['as' => 'banking.payments.show', 'uses' => 'Banking\PaymentsController@show']);
    Route::get('banking/payments/{payments}/edit', ['as' => 'banking.payments.edit', 'uses' => 'Banking\PaymentsController@edit']);
});
