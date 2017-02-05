<?php

Route::group(['middleware' => 'web', 'prefix' => 'leads', 'namespace' => 'Modules\Leads\Http\Controllers'], function()
{
    Route::get('/', 'LeadsController@index');
});
