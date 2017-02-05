<?php

Route::group(['middleware' => 'web', 'prefix' => 'employees', 'namespace' => 'Modules\Employees\Http\Controllers'], function()
{
    Route::get('/', 'EmployeesController@index');
});
