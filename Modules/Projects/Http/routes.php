<?php

Route::group(['middleware' => 'web', 'prefix' => 'projects', 'namespace' => 'Modules\Projects\Http\Controllers'], function()
{
    Route::get('/', 'ProjectsController@index');
});
