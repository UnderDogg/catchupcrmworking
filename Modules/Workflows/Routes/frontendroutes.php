<?php

Route::group(['middleware' => 'web', 'prefix' => '', 'namespace' => 'Modules\Workflows\Http\Controllers'], function () {


    Route::get('workflows/workflowActions', ['as' => 'workflows.workflowActions.index', 'uses' => 'Workflows\WorkflowActionController@index']);
    Route::post('workflows/workflowActions', ['as' => 'workflows.workflowActions.store', 'uses' => 'Workflows\WorkflowActionController@store']);
    Route::get('workflows/workflowActions/create', ['as' => 'workflows.workflowActions.create', 'uses' => 'Workflows\WorkflowActionController@create']);
    Route::put('workflows/workflowActions/{workflowActions}', ['as' => 'workflows.workflowActions.update', 'uses' => 'Workflows\WorkflowActionController@update']);
    Route::patch('workflows/workflowActions/{workflowActions}', ['as' => 'workflows.workflowActions.update', 'uses' => 'Workflows\WorkflowActionController@update']);
    Route::delete('workflows/workflowActions/{workflowActions}', ['as' => 'workflows.workflowActions.destroy', 'uses' => 'Workflows\WorkflowActionController@destroy']);
    Route::get('workflows/workflowActions/{workflowActions}', ['as' => 'workflows.workflowActions.show', 'uses' => 'Workflows\WorkflowActionController@show']);
    Route::get('workflows/workflowActions/{workflowActions}/edit', ['as' => 'workflows.workflowActions.edit', 'uses' => 'Workflows\WorkflowActionController@edit']);


    Route::get('workflows/workflowCloses', ['as' => 'workflows.workflowCloses.index', 'uses' => 'Workflows\WorkflowCloseController@index']);
    Route::post('workflows/workflowCloses', ['as' => 'workflows.workflowCloses.store', 'uses' => 'Workflows\WorkflowCloseController@store']);
    Route::get('workflows/workflowCloses/create', ['as' => 'workflows.workflowCloses.create', 'uses' => 'Workflows\WorkflowCloseController@create']);
    Route::put('workflows/workflowCloses/{workflowCloses}', ['as' => 'workflows.workflowCloses.update', 'uses' => 'Workflows\WorkflowCloseController@update']);
    Route::patch('workflows/workflowCloses/{workflowCloses}', ['as' => 'workflows.workflowCloses.update', 'uses' => 'Workflows\WorkflowCloseController@update']);
    Route::delete('workflows/workflowCloses/{workflowCloses}', ['as' => 'workflows.workflowCloses.destroy', 'uses' => 'Workflows\WorkflowCloseController@destroy']);
    Route::get('workflows/workflowCloses/{workflowCloses}', ['as' => 'workflows.workflowCloses.show', 'uses' => 'Workflows\WorkflowCloseController@show']);
    Route::get('workflows/workflowCloses/{workflowCloses}/edit', ['as' => 'workflows.workflowCloses.edit', 'uses' => 'Workflows\WorkflowCloseController@edit']);


    Route::get('workflows/workflowNames', ['as' => 'workflows.workflowNames.index', 'uses' => 'Workflows\WorkflowNameController@index']);
    Route::post('workflows/workflowNames', ['as' => 'workflows.workflowNames.store', 'uses' => 'Workflows\WorkflowNameController@store']);
    Route::get('workflows/workflowNames/create', ['as' => 'workflows.workflowNames.create', 'uses' => 'Workflows\WorkflowNameController@create']);
    Route::put('workflows/workflowNames/{workflowNames}', ['as' => 'workflows.workflowNames.update', 'uses' => 'Workflows\WorkflowNameController@update']);
    Route::patch('workflows/workflowNames/{workflowNames}', ['as' => 'workflows.workflowNames.update', 'uses' => 'Workflows\WorkflowNameController@update']);
    Route::delete('workflows/workflowNames/{workflowNames}', ['as' => 'workflows.workflowNames.destroy', 'uses' => 'Workflows\WorkflowNameController@destroy']);
    Route::get('workflows/workflowNames/{workflowNames}', ['as' => 'workflows.workflowNames.show', 'uses' => 'Workflows\WorkflowNameController@show']);
    Route::get('workflows/workflowNames/{workflowNames}/edit', ['as' => 'workflows.workflowNames.edit', 'uses' => 'Workflows\WorkflowNameController@edit']);


    Route::get('workflows/workflowRules', ['as' => 'workflows.workflowRules.index', 'uses' => 'Workflows\WorkflowRulesController@index']);
    Route::post('workflows/workflowRules', ['as' => 'workflows.workflowRules.store', 'uses' => 'Workflows\WorkflowRulesController@store']);
    Route::get('workflows/workflowRules/create', ['as' => 'workflows.workflowRules.create', 'uses' => 'Workflows\WorkflowRulesController@create']);
    Route::put('workflows/workflowRules/{workflowRules}', ['as' => 'workflows.workflowRules.update', 'uses' => 'Workflows\WorkflowRulesController@update']);
    Route::patch('workflows/workflowRules/{workflowRules}', ['as' => 'workflows.workflowRules.update', 'uses' => 'Workflows\WorkflowRulesController@update']);
    Route::delete('workflows/workflowRules/{workflowRules}', ['as' => 'workflows.workflowRules.destroy', 'uses' => 'Workflows\WorkflowRulesController@destroy']);
    Route::get('workflows/workflowRules/{workflowRules}', ['as' => 'workflows.workflowRules.show', 'uses' => 'Workflows\WorkflowRulesController@show']);
    Route::get('workflows/workflowRules/{workflowRules}/edit', ['as' => 'workflows.workflowRules.edit', 'uses' => 'Workflows\WorkflowRulesController@edit']);
});
