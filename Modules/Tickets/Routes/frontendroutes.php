<?php

Route::group(['middleware' => 'web', 'prefix' => '', 'namespace' => 'Modules\Tickets\Http\Controllers'], function () {


    Route::get('core/settingsTickets', ['as' => 'core.settingsTickets.index', 'uses' => 'Core\SettingsTicketsController@index']);
    Route::post('core/settingsTickets', ['as' => 'core.settingsTickets.store', 'uses' => 'Core\SettingsTicketsController@store']);
    Route::get('core/settingsTickets/create', ['as' => 'core.settingsTickets.create', 'uses' => 'Core\SettingsTicketsController@create']);
    Route::put('core/settingsTickets/{settingsTickets}', ['as' => 'core.settingsTickets.update', 'uses' => 'Core\SettingsTicketsController@update']);
    Route::patch('core/settingsTickets/{settingsTickets}', ['as' => 'core.settingsTickets.update', 'uses' => 'Core\SettingsTicketsController@update']);
    Route::delete('core/settingsTickets/{settingsTickets}', ['as' => 'core.settingsTickets.destroy', 'uses' => 'Core\SettingsTicketsController@destroy']);
    Route::get('core/settingsTickets/{settingsTickets}', ['as' => 'core.settingsTickets.show', 'uses' => 'Core\SettingsTicketsController@show']);
    Route::get('core/settingsTickets/{settingsTickets}/edit', ['as' => 'core.settingsTickets.edit', 'uses' => 'Core\SettingsTicketsController@edit']);


    Route::get('tickets/ticketCategories', ['as' => 'tickets.ticketCategories.index', 'uses' => 'Tickets\TicketCategoriesController@index']);
    Route::post('tickets/ticketCategories', ['as' => 'tickets.ticketCategories.store', 'uses' => 'Tickets\TicketCategoriesController@store']);
    Route::get('tickets/ticketCategories/create', ['as' => 'tickets.ticketCategories.create', 'uses' => 'Tickets\TicketCategoriesController@create']);
    Route::put('tickets/ticketCategories/{ticketCategories}', ['as' => 'tickets.ticketCategories.update', 'uses' => 'Tickets\TicketCategoriesController@update']);
    Route::patch('tickets/ticketCategories/{ticketCategories}', ['as' => 'tickets.ticketCategories.update', 'uses' => 'Tickets\TicketCategoriesController@update']);
    Route::delete('tickets/ticketCategories/{ticketCategories}', ['as' => 'tickets.ticketCategories.destroy', 'uses' => 'Tickets\TicketCategoriesController@destroy']);
    Route::get('tickets/ticketCategories/{ticketCategories}', ['as' => 'tickets.ticketCategories.show', 'uses' => 'Tickets\TicketCategoriesController@show']);
    Route::get('tickets/ticketCategories/{ticketCategories}/edit', ['as' => 'tickets.ticketCategories.edit', 'uses' => 'Tickets\TicketCategoriesController@edit']);


    Route::get('tickets/ticketHelpTopics', ['as' => 'tickets.ticketHelpTopics.index', 'uses' => 'Tickets\TicketHelpTopicsController@index']);
    Route::post('tickets/ticketHelpTopics', ['as' => 'tickets.ticketHelpTopics.store', 'uses' => 'Tickets\TicketHelpTopicsController@store']);
    Route::get('tickets/ticketHelpTopics/create', ['as' => 'tickets.ticketHelpTopics.create', 'uses' => 'Tickets\TicketHelpTopicsController@create']);
    Route::put('tickets/ticketHelpTopics/{ticketHelpTopics}', ['as' => 'tickets.ticketHelpTopics.update', 'uses' => 'Tickets\TicketHelpTopicsController@update']);
    Route::patch('tickets/ticketHelpTopics/{ticketHelpTopics}', ['as' => 'tickets.ticketHelpTopics.update', 'uses' => 'Tickets\TicketHelpTopicsController@update']);
    Route::delete('tickets/ticketHelpTopics/{ticketHelpTopics}', ['as' => 'tickets.ticketHelpTopics.destroy', 'uses' => 'Tickets\TicketHelpTopicsController@destroy']);
    Route::get('tickets/ticketHelpTopics/{ticketHelpTopics}', ['as' => 'tickets.ticketHelpTopics.show', 'uses' => 'Tickets\TicketHelpTopicsController@show']);
    Route::get('tickets/ticketHelpTopics/{ticketHelpTopics}/edit', ['as' => 'tickets.ticketHelpTopics.edit', 'uses' => 'Tickets\TicketHelpTopicsController@edit']);


    Route::get('tickets/ticketSources', ['as' => 'tickets.ticketSources.index', 'uses' => 'Tickets\TicketSourcesController@index']);
    Route::post('tickets/ticketSources', ['as' => 'tickets.ticketSources.store', 'uses' => 'Tickets\TicketSourcesController@store']);
    Route::get('tickets/ticketSources/create', ['as' => 'tickets.ticketSources.create', 'uses' => 'Tickets\TicketSourcesController@create']);
    Route::put('tickets/ticketSources/{ticketSources}', ['as' => 'tickets.ticketSources.update', 'uses' => 'Tickets\TicketSourcesController@update']);
    Route::patch('tickets/ticketSources/{ticketSources}', ['as' => 'tickets.ticketSources.update', 'uses' => 'Tickets\TicketSourcesController@update']);
    Route::delete('tickets/ticketSources/{ticketSources}', ['as' => 'tickets.ticketSources.destroy', 'uses' => 'Tickets\TicketSourcesController@destroy']);
    Route::get('tickets/ticketSources/{ticketSources}', ['as' => 'tickets.ticketSources.show', 'uses' => 'Tickets\TicketSourcesController@show']);
    Route::get('tickets/ticketSources/{ticketSources}/edit', ['as' => 'tickets.ticketSources.edit', 'uses' => 'Tickets\TicketSourcesController@edit']);


    Route::get('tickets/ticketTypes', ['as' => 'tickets.ticketTypes.index', 'uses' => 'Tickets\TicketTypesController@index']);
    Route::post('tickets/ticketTypes', ['as' => 'tickets.ticketTypes.store', 'uses' => 'Tickets\TicketTypesController@store']);
    Route::get('tickets/ticketTypes/create', ['as' => 'tickets.ticketTypes.create', 'uses' => 'Tickets\TicketTypesController@create']);
    Route::put('tickets/ticketTypes/{ticketTypes}', ['as' => 'tickets.ticketTypes.update', 'uses' => 'Tickets\TicketTypesController@update']);
    Route::patch('tickets/ticketTypes/{ticketTypes}', ['as' => 'tickets.ticketTypes.update', 'uses' => 'Tickets\TicketTypesController@update']);
    Route::delete('tickets/ticketTypes/{ticketTypes}', ['as' => 'tickets.ticketTypes.destroy', 'uses' => 'Tickets\TicketTypesController@destroy']);
    Route::get('tickets/ticketTypes/{ticketTypes}', ['as' => 'tickets.ticketTypes.show', 'uses' => 'Tickets\TicketTypesController@show']);
    Route::get('tickets/ticketTypes/{ticketTypes}/edit', ['as' => 'tickets.ticketTypes.edit', 'uses' => 'Tickets\TicketTypesController@edit']);

});
