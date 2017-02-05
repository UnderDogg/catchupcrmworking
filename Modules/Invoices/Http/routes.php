<?php

Route::group(['middleware' => 'web', 'prefix' => 'invoices', 'namespace' => 'Modules\Invoices\Http\Controllers'], function()
{
    Route::get('/', 'InvoicesController@index');
});
