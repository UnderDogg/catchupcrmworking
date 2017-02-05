<?php

Route::group(['middleware' => 'web', 'prefix' => 'banking', 'namespace' => 'Modules\Banking\Http\Controllers'], function()
{
    Route::get('/', 'BankingController@index');
});
