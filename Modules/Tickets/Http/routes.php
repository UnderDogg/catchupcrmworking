<?php

Route::group(['middleware' => 'web', 'prefix' => 'tickets', 'namespace' => 'Modules\Tickets\Http\Controllers'], function()
{
    Route::get('/', 'TicketsController@index');
});
