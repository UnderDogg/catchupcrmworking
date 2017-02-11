<?php

Route::group(['middleware' => 'web', 'prefix' => 'employees', 'namespace' => 'Modules\Employees\Http\Controllers'], function () {


    Route::get('employees/employees', ['as' => 'employees.employees.index', 'uses' => 'Employees\EmployeesController@index']);
    Route::post('employees/employees', ['as' => 'employees.employees.store', 'uses' => 'Employees\EmployeesController@store']);
    Route::get('employees/employees/create', ['as' => 'employees.employees.create', 'uses' => 'Employees\EmployeesController@create']);
    Route::put('employees/employees/{employees}', ['as' => 'employees.employees.update', 'uses' => 'Employees\EmployeesController@update']);
    Route::patch('employees/employees/{employees}', ['as' => 'employees.employees.update', 'uses' => 'Employees\EmployeesController@update']);
    Route::delete('employees/employees/{employees}', ['as' => 'employees.employees.destroy', 'uses' => 'Employees\EmployeesController@destroy']);
    Route::get('employees/employees/{employees}', ['as' => 'employees.employees.show', 'uses' => 'Employees\EmployeesController@show']);
    Route::get('employees/employees/{employees}/edit', ['as' => 'employees.employees.edit', 'uses' => 'Employees\EmployeesController@edit']);


    Route::get('employees/teamStaffs', ['as' => 'employees.teamStaffs.index', 'uses' => 'Employees\TeamStaffController@index']);
    Route::post('employees/teamStaffs', ['as' => 'employees.teamStaffs.store', 'uses' => 'Employees\TeamStaffController@store']);
    Route::get('employees/teamStaffs/create', ['as' => 'employees.teamStaffs.create', 'uses' => 'Employees\TeamStaffController@create']);
    Route::put('employees/teamStaffs/{teamStaffs}', ['as' => 'employees.teamStaffs.update', 'uses' => 'Employees\TeamStaffController@update']);
    Route::patch('employees/teamStaffs/{teamStaffs}', ['as' => 'employees.teamStaffs.update', 'uses' => 'Employees\TeamStaffController@update']);
    Route::delete('employees/teamStaffs/{teamStaffs}', ['as' => 'employees.teamStaffs.destroy', 'uses' => 'Employees\TeamStaffController@destroy']);
    Route::get('employees/teamStaffs/{teamStaffs}', ['as' => 'employees.teamStaffs.show', 'uses' => 'Employees\TeamStaffController@show']);
    Route::get('employees/teamStaffs/{teamStaffs}/edit', ['as' => 'employees.teamStaffs.edit', 'uses' => 'Employees\TeamStaffController@edit']);


    Route::get('employees/teams', ['as' => 'employees.teams.index', 'uses' => 'Employees\TeamsController@index']);
    Route::post('employees/teams', ['as' => 'employees.teams.store', 'uses' => 'Employees\TeamsController@store']);
    Route::get('employees/teams/create', ['as' => 'employees.teams.create', 'uses' => 'Employees\TeamsController@create']);
    Route::put('employees/teams/{teams}', ['as' => 'employees.teams.update', 'uses' => 'Employees\TeamsController@update']);
    Route::patch('employees/teams/{teams}', ['as' => 'employees.teams.update', 'uses' => 'Employees\TeamsController@update']);
    Route::delete('employees/teams/{teams}', ['as' => 'employees.teams.destroy', 'uses' => 'Employees\TeamsController@destroy']);
    Route::get('employees/teams/{teams}', ['as' => 'employees.teams.show', 'uses' => 'Employees\TeamsController@show']);
    Route::get('employees/teams/{teams}/edit', ['as' => 'employees.teams.edit', 'uses' => 'Employees\TeamsController@edit']);


});
