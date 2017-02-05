<?php

Route::group(['middleware' => 'web', 'prefix' => 'balancesheet', 'namespace' => 'Modules\BalanceSheet\Http\Controllers'], function()
{
    Route::get('/', 'BalanceSheetController@index');
});
