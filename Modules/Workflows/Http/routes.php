<?php

Route::group(['middleware' => 'web', 'prefix' => 'workflows', 'namespace' => 'Modules\Workflows\Http\Controllers'], function()
{
    Route::get('/', 'WorkflowsController@index');
});
