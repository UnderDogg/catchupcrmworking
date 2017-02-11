<?php

Route::group(['middleware' => 'web', 'prefix' => '', 'namespace' => 'Modules\Projects\Http\Controllers'], function () {
    Route::get('projects/projects', ['as' => 'projects.projects.index', 'uses' => 'Projects\ProjectsController@index']);
    Route::post('projects/projects', ['as' => 'projects.projects.store', 'uses' => 'Projects\ProjectsController@store']);
    Route::get('projects/projects/create', ['as' => 'projects.projects.create', 'uses' => 'Projects\ProjectsController@create']);
    Route::put('projects/projects/{projects}', ['as' => 'projects.projects.update', 'uses' => 'Projects\ProjectsController@update']);
    Route::patch('projects/projects/{projects}', ['as' => 'projects.projects.update', 'uses' => 'Projects\ProjectsController@update']);
    Route::delete('projects/projects/{projects}', ['as' => 'projects.projects.destroy', 'uses' => 'Projects\ProjectsController@destroy']);
    Route::get('projects/projects/{projects}', ['as' => 'projects.projects.show', 'uses' => 'Projects\ProjectsController@show']);
    Route::get('projects/projects/{projects}/edit', ['as' => 'projects.projects.edit', 'uses' => 'Projects\ProjectsController@edit']);


});
