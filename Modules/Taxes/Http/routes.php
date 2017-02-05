<?php

Route::group(['middleware' => 'web', 'prefix' => 'taxes', 'namespace' => 'Modules\Taxes\Http\Controllers'], function()
{
    Route::get('/', 'TaxesController@index');
});
