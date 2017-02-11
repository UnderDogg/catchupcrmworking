<?php

Route::group(['middleware' => 'web', 'prefix' => '', 'namespace' => 'Modules\Email\Http\Controllers'], function () {
    Route::get('email/banlists', ['as' => 'email.banlists.index', 'uses' => 'Email\BanlistController@index']);
    Route::post('email/banlists', ['as' => 'email.banlists.store', 'uses' => 'Email\BanlistController@store']);
    Route::get('email/banlists/create', ['as' => 'email.banlists.create', 'uses' => 'Email\BanlistController@create']);
    Route::put('email/banlists/{banlists}', ['as' => 'email.banlists.update', 'uses' => 'Email\BanlistController@update']);
    Route::patch('email/banlists/{banlists}', ['as' => 'email.banlists.update', 'uses' => 'Email\BanlistController@update']);
    Route::delete('email/banlists/{banlists}', ['as' => 'email.banlists.destroy', 'uses' => 'Email\BanlistController@destroy']);
    Route::get('email/banlists/{banlists}', ['as' => 'email.banlists.show', 'uses' => 'Email\BanlistController@show']);
    Route::get('email/banlists/{banlists}/edit', ['as' => 'email.banlists.edit', 'uses' => 'Email\BanlistController@edit']);


    Route::get('email/mailboxes', ['as' => 'email.mailboxes.index', 'uses' => 'Email\MailboxesController@index']);
    Route::post('email/mailboxes', ['as' => 'email.mailboxes.store', 'uses' => 'Email\MailboxesController@store']);
    Route::get('email/mailboxes/create', ['as' => 'email.mailboxes.create', 'uses' => 'Email\MailboxesController@create']);
    Route::put('email/mailboxes/{mailboxes}', ['as' => 'email.mailboxes.update', 'uses' => 'Email\MailboxesController@update']);
    Route::patch('email/mailboxes/{mailboxes}', ['as' => 'email.mailboxes.update', 'uses' => 'Email\MailboxesController@update']);
    Route::delete('email/mailboxes/{mailboxes}', ['as' => 'email.mailboxes.destroy', 'uses' => 'Email\MailboxesController@destroy']);
    Route::get('email/mailboxes/{mailboxes}', ['as' => 'email.mailboxes.show', 'uses' => 'Email\MailboxesController@show']);
    Route::get('email/mailboxes/{mailboxes}/edit', ['as' => 'email.mailboxes.edit', 'uses' => 'Email\MailboxesController@edit']);


    Route::get('email/mailTemplates', ['as' => 'email.mailTemplates.index', 'uses' => 'Email\MailTemplatesController@index']);
    Route::post('email/mailTemplates', ['as' => 'email.mailTemplates.store', 'uses' => 'Email\MailTemplatesController@store']);
    Route::get('email/mailTemplates/create', ['as' => 'email.mailTemplates.create', 'uses' => 'Email\MailTemplatesController@create']);
    Route::put('email/mailTemplates/{mailTemplates}', ['as' => 'email.mailTemplates.update', 'uses' => 'Email\MailTemplatesController@update']);
    Route::patch('email/mailTemplates/{mailTemplates}', ['as' => 'email.mailTemplates.update', 'uses' => 'Email\MailTemplatesController@update']);
    Route::delete('email/mailTemplates/{mailTemplates}', ['as' => 'email.mailTemplates.destroy', 'uses' => 'Email\MailTemplatesController@destroy']);
    Route::get('email/mailTemplates/{mailTemplates}', ['as' => 'email.mailTemplates.show', 'uses' => 'Email\MailTemplatesController@show']);
    Route::get('email/mailTemplates/{mailTemplates}/edit', ['as' => 'email.mailTemplates.edit', 'uses' => 'Email\MailTemplatesController@edit']);


    Route::get('email/mailtemplatesSets', ['as' => 'email.mailtemplatesSets.index', 'uses' => 'Email\MailtemplatesSetsController@index']);
    Route::post('email/mailtemplatesSets', ['as' => 'email.mailtemplatesSets.store', 'uses' => 'Email\MailtemplatesSetsController@store']);
    Route::get('email/mailtemplatesSets/create', ['as' => 'email.mailtemplatesSets.create', 'uses' => 'Email\MailtemplatesSetsController@create']);
    Route::put('email/mailtemplatesSets/{mailtemplatesSets}', ['as' => 'email.mailtemplatesSets.update', 'uses' => 'Email\MailtemplatesSetsController@update']);
    Route::patch('email/mailtemplatesSets/{mailtemplatesSets}', ['as' => 'email.mailtemplatesSets.update', 'uses' => 'Email\MailtemplatesSetsController@update']);
    Route::delete('email/mailtemplatesSets/{mailtemplatesSets}', ['as' => 'email.mailtemplatesSets.destroy', 'uses' => 'Email\MailtemplatesSetsController@destroy']);
    Route::get('email/mailtemplatesSets/{mailtemplatesSets}', ['as' => 'email.mailtemplatesSets.show', 'uses' => 'Email\MailtemplatesSetsController@show']);
    Route::get('email/mailtemplatesSets/{mailtemplatesSets}/edit', ['as' => 'email.mailtemplatesSets.edit', 'uses' => 'Email\MailtemplatesSetsController@edit']);


    Route::get('email/mailtemplatesTypes', ['as' => 'email.mailtemplatesTypes.index', 'uses' => 'Email\MailtemplatesTypesController@index']);
    Route::post('email/mailtemplatesTypes', ['as' => 'email.mailtemplatesTypes.store', 'uses' => 'Email\MailtemplatesTypesController@store']);
    Route::get('email/mailtemplatesTypes/create', ['as' => 'email.mailtemplatesTypes.create', 'uses' => 'Email\MailtemplatesTypesController@create']);
    Route::put('email/mailtemplatesTypes/{mailtemplatesTypes}', ['as' => 'email.mailtemplatesTypes.update', 'uses' => 'Email\MailtemplatesTypesController@update']);
    Route::patch('email/mailtemplatesTypes/{mailtemplatesTypes}', ['as' => 'email.mailtemplatesTypes.update', 'uses' => 'Email\MailtemplatesTypesController@update']);
    Route::delete('email/mailtemplatesTypes/{mailtemplatesTypes}', ['as' => 'email.mailtemplatesTypes.destroy', 'uses' => 'Email\MailtemplatesTypesController@destroy']);
    Route::get('email/mailtemplatesTypes/{mailtemplatesTypes}', ['as' => 'email.mailtemplatesTypes.show', 'uses' => 'Email\MailtemplatesTypesController@show']);
    Route::get('email/mailtemplatesTypes/{mailtemplatesTypes}/edit', ['as' => 'email.mailtemplatesTypes.edit', 'uses' => 'Email\MailtemplatesTypesController@edit']);


    Route::get('core/settingsEmails', ['as' => 'core.settingsEmails.index', 'uses' => 'Core\SettingsEmailController@index']);
    Route::post('core/settingsEmails', ['as' => 'core.settingsEmails.store', 'uses' => 'Core\SettingsEmailController@store']);
    Route::get('core/settingsEmails/create', ['as' => 'core.settingsEmails.create', 'uses' => 'Core\SettingsEmailController@create']);
    Route::put('core/settingsEmails/{settingsEmails}', ['as' => 'core.settingsEmails.update', 'uses' => 'Core\SettingsEmailController@update']);
    Route::patch('core/settingsEmails/{settingsEmails}', ['as' => 'core.settingsEmails.update', 'uses' => 'Core\SettingsEmailController@update']);
    Route::delete('core/settingsEmails/{settingsEmails}', ['as' => 'core.settingsEmails.destroy', 'uses' => 'Core\SettingsEmailController@destroy']);
    Route::get('core/settingsEmails/{settingsEmails}', ['as' => 'core.settingsEmails.show', 'uses' => 'Core\SettingsEmailController@show']);
    Route::get('core/settingsEmails/{settingsEmails}/edit', ['as' => 'core.settingsEmails.edit', 'uses' => 'Core\SettingsEmailController@edit']);


});





