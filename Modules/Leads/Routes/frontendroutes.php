<?php

Route::group(['middleware' => 'web', 'prefix' => '', 'namespace' => 'Modules\Leads\Http\Controllers'], function () {


    Route::get('leads/leads', ['as' => 'leads.leads.index', 'uses' => 'Leads\LeadsController@index']);
    Route::post('leads/leads', ['as' => 'leads.leads.store', 'uses' => 'Leads\LeadsController@store']);
    Route::get('leads/leads/create', ['as' => 'leads.leads.create', 'uses' => 'Leads\LeadsController@create']);
    Route::put('leads/leads/{leads}', ['as' => 'leads.leads.update', 'uses' => 'Leads\LeadsController@update']);
    Route::patch('leads/leads/{leads}', ['as' => 'leads.leads.update', 'uses' => 'Leads\LeadsController@update']);
    Route::delete('leads/leads/{leads}', ['as' => 'leads.leads.destroy', 'uses' => 'Leads\LeadsController@destroy']);
    Route::get('leads/leads/{leads}', ['as' => 'leads.leads.show', 'uses' => 'Leads\LeadsController@show']);
    Route::get('leads/leads/{leads}/edit', ['as' => 'leads.leads.edit', 'uses' => 'Leads\LeadsController@edit']);


    Route::get('leads/leadSources', ['as' => 'leads.leadSources.index', 'uses' => 'Leads\LeadSourceController@index']);
    Route::post('leads/leadSources', ['as' => 'leads.leadSources.store', 'uses' => 'Leads\LeadSourceController@store']);
    Route::get('leads/leadSources/create', ['as' => 'leads.leadSources.create', 'uses' => 'Leads\LeadSourceController@create']);
    Route::put('leads/leadSources/{leadSources}', ['as' => 'leads.leadSources.update', 'uses' => 'Leads\LeadSourceController@update']);
    Route::patch('leads/leadSources/{leadSources}', ['as' => 'leads.leadSources.update', 'uses' => 'Leads\LeadSourceController@update']);
    Route::delete('leads/leadSources/{leadSources}', ['as' => 'leads.leadSources.destroy', 'uses' => 'Leads\LeadSourceController@destroy']);
    Route::get('leads/leadSources/{leadSources}', ['as' => 'leads.leadSources.show', 'uses' => 'Leads\LeadSourceController@show']);
    Route::get('leads/leadSources/{leadSources}/edit', ['as' => 'leads.leadSources.edit', 'uses' => 'Leads\LeadSourceController@edit']);


    Route::get('leads/leadStatuses', ['as' => 'leads.leadStatuses.index', 'uses' => 'Leads\LeadStatusController@index']);
    Route::post('leads/leadStatuses', ['as' => 'leads.leadStatuses.store', 'uses' => 'Leads\LeadStatusController@store']);
    Route::get('leads/leadStatuses/create', ['as' => 'leads.leadStatuses.create', 'uses' => 'Leads\LeadStatusController@create']);
    Route::put('leads/leadStatuses/{leadStatuses}', ['as' => 'leads.leadStatuses.update', 'uses' => 'Leads\LeadStatusController@update']);
    Route::patch('leads/leadStatuses/{leadStatuses}', ['as' => 'leads.leadStatuses.update', 'uses' => 'Leads\LeadStatusController@update']);
    Route::delete('leads/leadStatuses/{leadStatuses}', ['as' => 'leads.leadStatuses.destroy', 'uses' => 'Leads\LeadStatusController@destroy']);
    Route::get('leads/leadStatuses/{leadStatuses}', ['as' => 'leads.leadStatuses.show', 'uses' => 'Leads\LeadStatusController@show']);
    Route::get('leads/leadStatuses/{leadStatuses}/edit', ['as' => 'leads.leadStatuses.edit', 'uses' => 'Leads\LeadStatusController@edit']);


    Route::get('leads/opportunityStages', ['as' => 'leads.opportunityStages.index', 'uses' => 'Leads\OpportunityStageController@index']);
    Route::post('leads/opportunityStages', ['as' => 'leads.opportunityStages.store', 'uses' => 'Leads\OpportunityStageController@store']);
    Route::get('leads/opportunityStages/create', ['as' => 'leads.opportunityStages.create', 'uses' => 'Leads\OpportunityStageController@create']);
    Route::put('leads/opportunityStages/{opportunityStages}', ['as' => 'leads.opportunityStages.update', 'uses' => 'Leads\OpportunityStageController@update']);
    Route::patch('leads/opportunityStages/{opportunityStages}', ['as' => 'leads.opportunityStages.update', 'uses' => 'Leads\OpportunityStageController@update']);
    Route::delete('leads/opportunityStages/{opportunityStages}', ['as' => 'leads.opportunityStages.destroy', 'uses' => 'Leads\OpportunityStageController@destroy']);
    Route::get('leads/opportunityStages/{opportunityStages}', ['as' => 'leads.opportunityStages.show', 'uses' => 'Leads\OpportunityStageController@show']);
    Route::get('leads/opportunityStages/{opportunityStages}/edit', ['as' => 'leads.opportunityStages.edit', 'uses' => 'Leads\OpportunityStageController@edit']);


    Route::get('leads/opportunityTypes', ['as' => 'leads.opportunityTypes.index', 'uses' => 'Leads\OpportunityTypeController@index']);
    Route::post('leads/opportunityTypes', ['as' => 'leads.opportunityTypes.store', 'uses' => 'Leads\OpportunityTypeController@store']);
    Route::get('leads/opportunityTypes/create', ['as' => 'leads.opportunityTypes.create', 'uses' => 'Leads\OpportunityTypeController@create']);
    Route::put('leads/opportunityTypes/{opportunityTypes}', ['as' => 'leads.opportunityTypes.update', 'uses' => 'Leads\OpportunityTypeController@update']);
    Route::patch('leads/opportunityTypes/{opportunityTypes}', ['as' => 'leads.opportunityTypes.update', 'uses' => 'Leads\OpportunityTypeController@update']);
    Route::delete('leads/opportunityTypes/{opportunityTypes}', ['as' => 'leads.opportunityTypes.destroy', 'uses' => 'Leads\OpportunityTypeController@destroy']);
    Route::get('leads/opportunityTypes/{opportunityTypes}', ['as' => 'leads.opportunityTypes.show', 'uses' => 'Leads\OpportunityTypeController@show']);
    Route::get('leads/opportunityTypes/{opportunityTypes}/edit', ['as' => 'leads.opportunityTypes.edit', 'uses' => 'Leads\OpportunityTypeController@edit']);


    Route::get('leads/opportunities', ['as' => 'leads.opportunities.index', 'uses' => 'Leads\OpportunitiesController@index']);
    Route::post('leads/opportunities', ['as' => 'leads.opportunities.store', 'uses' => 'Leads\OpportunitiesController@store']);
    Route::get('leads/opportunities/create', ['as' => 'leads.opportunities.create', 'uses' => 'Leads\OpportunitiesController@create']);
    Route::put('leads/opportunities/{opportunities}', ['as' => 'leads.opportunities.update', 'uses' => 'Leads\OpportunitiesController@update']);
    Route::patch('leads/opportunities/{opportunities}', ['as' => 'leads.opportunities.update', 'uses' => 'Leads\OpportunitiesController@update']);
    Route::delete('leads/opportunities/{opportunities}', ['as' => 'leads.opportunities.destroy', 'uses' => 'Leads\OpportunitiesController@destroy']);
    Route::get('leads/opportunities/{opportunities}', ['as' => 'leads.opportunities.show', 'uses' => 'Leads\OpportunitiesController@show']);
    Route::get('leads/opportunities/{opportunities}/edit', ['as' => 'leads.opportunities.edit', 'uses' => 'Leads\OpportunitiesController@edit']);


});
