<?php

Route::group(['middleware' => 'web', 'prefix' => 'core', 'namespace' => 'Modules\Core\Http\Controllers'], function () {
    Route::get('/', function () {
        return redirect('/home');


    });


    Route::get('/home', 'HomeController@index');


    Route::get('core/companies', ['as' => 'core.companies.index', 'uses' => 'Core\CompaniesController@index']);
    Route::post('core/companies', ['as' => 'core.companies.store', 'uses' => 'Core\CompaniesController@store']);
    Route::get('core/companies/create', ['as' => 'core.companies.create', 'uses' => 'Core\CompaniesController@create']);
    Route::put('core/companies/{companies}', ['as' => 'core.companies.update', 'uses' => 'Core\CompaniesController@update']);
    Route::patch('core/companies/{companies}', ['as' => 'core.companies.update', 'uses' => 'Core\CompaniesController@update']);
    Route::delete('core/companies/{companies}', ['as' => 'core.companies.destroy', 'uses' => 'Core\CompaniesController@destroy']);
    Route::get('core/companies/{companies}', ['as' => 'core.companies.show', 'uses' => 'Core\CompaniesController@show']);
    Route::get('core/companies/{companies}/edit', ['as' => 'core.companies.edit', 'uses' => 'Core\CompaniesController@edit']);


    Route::get('core/companies', ['as' => 'core.companies.index', 'uses' => 'Core\CompaniesController@index']);
    Route::post('core/companies', ['as' => 'core.companies.store', 'uses' => 'Core\CompaniesController@store']);
    Route::get('core/companies/create', ['as' => 'core.companies.create', 'uses' => 'Core\CompaniesController@create']);
    Route::put('core/companies/{companies}', ['as' => 'core.companies.update', 'uses' => 'Core\CompaniesController@update']);
    Route::patch('core/companies/{companies}', ['as' => 'core.companies.update', 'uses' => 'Core\CompaniesController@update']);
    Route::delete('core/companies/{companies}', ['as' => 'core.companies.destroy', 'uses' => 'Core\CompaniesController@destroy']);
    Route::get('core/companies/{companies}', ['as' => 'core.companies.show', 'uses' => 'Core\CompaniesController@show']);
    Route::get('core/companies/{companies}/edit', ['as' => 'core.companies.edit', 'uses' => 'Core\CompaniesController@edit']);


    Route::get('core/departmentAssignStaffs', ['as' => 'core.departmentAssignStaffs.index', 'uses' => 'Core\Department_assign_staffController@index']);
    Route::post('core/departmentAssignStaffs', ['as' => 'core.departmentAssignStaffs.store', 'uses' => 'Core\Department_assign_staffController@store']);
    Route::get('core/departmentAssignStaffs/create', ['as' => 'core.departmentAssignStaffs.create', 'uses' => 'Core\Department_assign_staffController@create']);
    Route::put('core/departmentAssignStaffs/{departmentAssignStaffs}', ['as' => 'core.departmentAssignStaffs.update', 'uses' => 'Core\Department_assign_staffController@update']);
    Route::patch('core/departmentAssignStaffs/{departmentAssignStaffs}', ['as' => 'core.departmentAssignStaffs.update', 'uses' => 'Core\Department_assign_staffController@update']);
    Route::delete('core/departmentAssignStaffs/{departmentAssignStaffs}', ['as' => 'core.departmentAssignStaffs.destroy', 'uses' => 'Core\Department_assign_staffController@destroy']);
    Route::get('core/departmentAssignStaffs/{departmentAssignStaffs}', ['as' => 'core.departmentAssignStaffs.show', 'uses' => 'Core\Department_assign_staffController@show']);
    Route::get('core/departmentAssignStaffs/{departmentAssignStaffs}/edit', ['as' => 'core.departmentAssignStaffs.edit', 'uses' => 'Core\Department_assign_staffController@edit']);


    Route::get('core/departments', ['as' => 'core.departments.index', 'uses' => 'Core\DepartmentsController@index']);
    Route::post('core/departments', ['as' => 'core.departments.store', 'uses' => 'Core\DepartmentsController@store']);
    Route::get('core/departments/create', ['as' => 'core.departments.create', 'uses' => 'Core\DepartmentsController@create']);
    Route::put('core/departments/{departments}', ['as' => 'core.departments.update', 'uses' => 'Core\DepartmentsController@update']);
    Route::patch('core/departments/{departments}', ['as' => 'core.departments.update', 'uses' => 'Core\DepartmentsController@update']);
    Route::delete('core/departments/{departments}', ['as' => 'core.departments.destroy', 'uses' => 'Core\DepartmentsController@destroy']);
    Route::get('core/departments/{departments}', ['as' => 'core.departments.show', 'uses' => 'Core\DepartmentsController@show']);
    Route::get('core/departments/{departments}/edit', ['as' => 'core.departments.edit', 'uses' => 'Core\DepartmentsController@edit']);


    Route::get('core/activityPriorities', ['as' => 'core.activityPriorities.index', 'uses' => 'Core\ActivityPriorityController@index']);
    Route::post('core/activityPriorities', ['as' => 'core.activityPriorities.store', 'uses' => 'Core\ActivityPriorityController@store']);
    Route::get('core/activityPriorities/create', ['as' => 'core.activityPriorities.create', 'uses' => 'Core\ActivityPriorityController@create']);
    Route::put('core/activityPriorities/{activityPriorities}', ['as' => 'core.activityPriorities.update', 'uses' => 'Core\ActivityPriorityController@update']);
    Route::patch('core/activityPriorities/{activityPriorities}', ['as' => 'core.activityPriorities.update', 'uses' => 'Core\ActivityPriorityController@update']);
    Route::delete('core/activityPriorities/{activityPriorities}', ['as' => 'core.activityPriorities.destroy', 'uses' => 'Core\ActivityPriorityController@destroy']);
    Route::get('core/activityPriorities/{activityPriorities}', ['as' => 'core.activityPriorities.show', 'uses' => 'Core\ActivityPriorityController@show']);
    Route::get('core/activityPriorities/{activityPriorities}/edit', ['as' => 'core.activityPriorities.edit', 'uses' => 'Core\ActivityPriorityController@edit']);


    Route::get('core/activityStatuses', ['as' => 'core.activityStatuses.index', 'uses' => 'Core\ActivityStatusController@index']);
    Route::post('core/activityStatuses', ['as' => 'core.activityStatuses.store', 'uses' => 'Core\ActivityStatusController@store']);
    Route::get('core/activityStatuses/create', ['as' => 'core.activityStatuses.create', 'uses' => 'Core\ActivityStatusController@create']);
    Route::put('core/activityStatuses/{activityStatuses}', ['as' => 'core.activityStatuses.update', 'uses' => 'Core\ActivityStatusController@update']);
    Route::patch('core/activityStatuses/{activityStatuses}', ['as' => 'core.activityStatuses.update', 'uses' => 'Core\ActivityStatusController@update']);
    Route::delete('core/activityStatuses/{activityStatuses}', ['as' => 'core.activityStatuses.destroy', 'uses' => 'Core\ActivityStatusController@destroy']);
    Route::get('core/activityStatuses/{activityStatuses}', ['as' => 'core.activityStatuses.show', 'uses' => 'Core\ActivityStatusController@show']);
    Route::get('core/activityStatuses/{activityStatuses}/edit', ['as' => 'core.activityStatuses.edit', 'uses' => 'Core\ActivityStatusController@edit']);


    Route::get('core/activityTypes', ['as' => 'core.activityTypes.index', 'uses' => 'Core\ActivityTypeController@index']);
    Route::post('core/activityTypes', ['as' => 'core.activityTypes.store', 'uses' => 'Core\ActivityTypeController@store']);
    Route::get('core/activityTypes/create', ['as' => 'core.activityTypes.create', 'uses' => 'Core\ActivityTypeController@create']);
    Route::put('core/activityTypes/{activityTypes}', ['as' => 'core.activityTypes.update', 'uses' => 'Core\ActivityTypeController@update']);
    Route::patch('core/activityTypes/{activityTypes}', ['as' => 'core.activityTypes.update', 'uses' => 'Core\ActivityTypeController@update']);
    Route::delete('core/activityTypes/{activityTypes}', ['as' => 'core.activityTypes.destroy', 'uses' => 'Core\ActivityTypeController@destroy']);
    Route::get('core/activityTypes/{activityTypes}', ['as' => 'core.activityTypes.show', 'uses' => 'Core\ActivityTypeController@show']);
    Route::get('core/activityTypes/{activityTypes}/edit', ['as' => 'core.activityTypes.edit', 'uses' => 'Core\ActivityTypeController@edit']);


    Route::get('core/taggableTaggables', ['as' => 'core.taggableTaggables.index', 'uses' => 'Core\TaggableTaggablesController@index']);
    Route::post('core/taggableTaggables', ['as' => 'core.taggableTaggables.store', 'uses' => 'Core\TaggableTaggablesController@store']);
    Route::get('core/taggableTaggables/create', ['as' => 'core.taggableTaggables.create', 'uses' => 'Core\TaggableTaggablesController@create']);
    Route::put('core/taggableTaggables/{taggableTaggables}', ['as' => 'core.taggableTaggables.update', 'uses' => 'Core\TaggableTaggablesController@update']);
    Route::patch('core/taggableTaggables/{taggableTaggables}', ['as' => 'core.taggableTaggables.update', 'uses' => 'Core\TaggableTaggablesController@update']);
    Route::delete('core/taggableTaggables/{taggableTaggables}', ['as' => 'core.taggableTaggables.destroy', 'uses' => 'Core\TaggableTaggablesController@destroy']);
    Route::get('core/taggableTaggables/{taggableTaggables}', ['as' => 'core.taggableTaggables.show', 'uses' => 'Core\TaggableTaggablesController@show']);
    Route::get('core/taggableTaggables/{taggableTaggables}/edit', ['as' => 'core.taggableTaggables.edit', 'uses' => 'Core\TaggableTaggablesController@edit']);


    Route::get('core/taggableTags', ['as' => 'core.taggableTags.index', 'uses' => 'Core\TaggableTagsController@index']);
    Route::post('core/taggableTags', ['as' => 'core.taggableTags.store', 'uses' => 'Core\TaggableTagsController@store']);
    Route::get('core/taggableTags/create', ['as' => 'core.taggableTags.create', 'uses' => 'Core\TaggableTagsController@create']);
    Route::put('core/taggableTags/{taggableTags}', ['as' => 'core.taggableTags.update', 'uses' => 'Core\TaggableTagsController@update']);
    Route::patch('core/taggableTags/{taggableTags}', ['as' => 'core.taggableTags.update', 'uses' => 'Core\TaggableTagsController@update']);
    Route::delete('core/taggableTags/{taggableTags}', ['as' => 'core.taggableTags.destroy', 'uses' => 'Core\TaggableTagsController@destroy']);
    Route::get('core/taggableTags/{taggableTags}', ['as' => 'core.taggableTags.show', 'uses' => 'Core\TaggableTagsController@show']);
    Route::get('core/taggableTags/{taggableTags}/edit', ['as' => 'core.taggableTags.edit', 'uses' => 'Core\TaggableTagsController@edit']);


    Route::get('taxes/taxRates', ['as' => 'taxes.taxRates.index', 'uses' => 'Taxes\TaxRatesController@index']);
    Route::post('taxes/taxRates', ['as' => 'taxes.taxRates.store', 'uses' => 'Taxes\TaxRatesController@store']);
    Route::get('taxes/taxRates/create', ['as' => 'taxes.taxRates.create', 'uses' => 'Taxes\TaxRatesController@create']);
    Route::put('taxes/taxRates/{taxRates}', ['as' => 'taxes.taxRates.update', 'uses' => 'Taxes\TaxRatesController@update']);
    Route::patch('taxes/taxRates/{taxRates}', ['as' => 'taxes.taxRates.update', 'uses' => 'Taxes\TaxRatesController@update']);
    Route::delete('taxes/taxRates/{taxRates}', ['as' => 'taxes.taxRates.destroy', 'uses' => 'Taxes\TaxRatesController@destroy']);
    Route::get('taxes/taxRates/{taxRates}', ['as' => 'taxes.taxRates.show', 'uses' => 'Taxes\TaxRatesController@show']);
    Route::get('taxes/taxRates/{taxRates}/edit', ['as' => 'taxes.taxRates.edit', 'uses' => 'Taxes\TaxRatesController@edit']);


    Route::get('core/permissions', ['as' => 'core.permissions.index', 'uses' => 'Core\PermissionsController@index']);
    Route::post('core/permissions', ['as' => 'core.permissions.store', 'uses' => 'Core\PermissionsController@store']);
    Route::get('core/permissions/create', ['as' => 'core.permissions.create', 'uses' => 'Core\PermissionsController@create']);
    Route::put('core/permissions/{permissions}', ['as' => 'core.permissions.update', 'uses' => 'Core\PermissionsController@update']);
    Route::patch('core/permissions/{permissions}', ['as' => 'core.permissions.update', 'uses' => 'Core\PermissionsController@update']);
    Route::delete('core/permissions/{permissions}', ['as' => 'core.permissions.destroy', 'uses' => 'Core\PermissionsController@destroy']);
    Route::get('core/permissions/{permissions}', ['as' => 'core.permissions.show', 'uses' => 'Core\PermissionsController@show']);
    Route::get('core/permissions/{permissions}/edit', ['as' => 'core.permissions.edit', 'uses' => 'Core\PermissionsController@edit']);


    Route::get('core/settingsAlertNotices', ['as' => 'core.settingsAlertNotices.index', 'uses' => 'Core\SettingsAlertNoticeController@index']);
    Route::post('core/settingsAlertNotices', ['as' => 'core.settingsAlertNotices.store', 'uses' => 'Core\SettingsAlertNoticeController@store']);
    Route::get('core/settingsAlertNotices/create', ['as' => 'core.settingsAlertNotices.create', 'uses' => 'Core\SettingsAlertNoticeController@create']);
    Route::put('core/settingsAlertNotices/{settingsAlertNotices}', ['as' => 'core.settingsAlertNotices.update', 'uses' => 'Core\SettingsAlertNoticeController@update']);
    Route::patch('core/settingsAlertNotices/{settingsAlertNotices}', ['as' => 'core.settingsAlertNotices.update', 'uses' => 'Core\SettingsAlertNoticeController@update']);
    Route::delete('core/settingsAlertNotices/{settingsAlertNotices}', ['as' => 'core.settingsAlertNotices.destroy', 'uses' => 'Core\SettingsAlertNoticeController@destroy']);
    Route::get('core/settingsAlertNotices/{settingsAlertNotices}', ['as' => 'core.settingsAlertNotices.show', 'uses' => 'Core\SettingsAlertNoticeController@show']);
    Route::get('core/settingsAlertNotices/{settingsAlertNotices}/edit', ['as' => 'core.settingsAlertNotices.edit', 'uses' => 'Core\SettingsAlertNoticeController@edit']);


    Route::get('core/settingsAutoResponses', ['as' => 'core.settingsAutoResponses.index', 'uses' => 'Core\SettingsAutoResponseController@index']);
    Route::post('core/settingsAutoResponses', ['as' => 'core.settingsAutoResponses.store', 'uses' => 'Core\SettingsAutoResponseController@store']);
    Route::get('core/settingsAutoResponses/create', ['as' => 'core.settingsAutoResponses.create', 'uses' => 'Core\SettingsAutoResponseController@create']);
    Route::put('core/settingsAutoResponses/{settingsAutoResponses}', ['as' => 'core.settingsAutoResponses.update', 'uses' => 'Core\SettingsAutoResponseController@update']);
    Route::patch('core/settingsAutoResponses/{settingsAutoResponses}', ['as' => 'core.settingsAutoResponses.update', 'uses' => 'Core\SettingsAutoResponseController@update']);
    Route::delete('core/settingsAutoResponses/{settingsAutoResponses}', ['as' => 'core.settingsAutoResponses.destroy', 'uses' => 'Core\SettingsAutoResponseController@destroy']);
    Route::get('core/settingsAutoResponses/{settingsAutoResponses}', ['as' => 'core.settingsAutoResponses.show', 'uses' => 'Core\SettingsAutoResponseController@show']);
    Route::get('core/settingsAutoResponses/{settingsAutoResponses}/edit', ['as' => 'core.settingsAutoResponses.edit', 'uses' => 'Core\SettingsAutoResponseController@edit']);


    Route::get('core/settingsSystems', ['as' => 'core.settingsSystems.index', 'uses' => 'Core\SettingsSystemController@index']);
    Route::post('core/settingsSystems', ['as' => 'core.settingsSystems.store', 'uses' => 'Core\SettingsSystemController@store']);
    Route::get('core/settingsSystems/create', ['as' => 'core.settingsSystems.create', 'uses' => 'Core\SettingsSystemController@create']);
    Route::put('core/settingsSystems/{settingsSystems}', ['as' => 'core.settingsSystems.update', 'uses' => 'Core\SettingsSystemController@update']);
    Route::patch('core/settingsSystems/{settingsSystems}', ['as' => 'core.settingsSystems.update', 'uses' => 'Core\SettingsSystemController@update']);
    Route::delete('core/settingsSystems/{settingsSystems}', ['as' => 'core.settingsSystems.destroy', 'uses' => 'Core\SettingsSystemController@destroy']);
    Route::get('core/settingsSystems/{settingsSystems}', ['as' => 'core.settingsSystems.show', 'uses' => 'Core\SettingsSystemController@show']);
    Route::get('core/settingsSystems/{settingsSystems}/edit', ['as' => 'core.settingsSystems.edit', 'uses' => 'Core\SettingsSystemController@edit']);


    Route::get('core/userRoles', ['as' => 'core.userRoles.index', 'uses' => 'Core\UserRolesController@index']);
    Route::post('core/userRoles', ['as' => 'core.userRoles.store', 'uses' => 'Core\UserRolesController@store']);
    Route::get('core/userRoles/create', ['as' => 'core.userRoles.create', 'uses' => 'Core\UserRolesController@create']);
    Route::put('core/userRoles/{userRoles}', ['as' => 'core.userRoles.update', 'uses' => 'Core\UserRolesController@update']);
    Route::patch('core/userRoles/{userRoles}', ['as' => 'core.userRoles.update', 'uses' => 'Core\UserRolesController@update']);
    Route::delete('core/userRoles/{userRoles}', ['as' => 'core.userRoles.destroy', 'uses' => 'Core\UserRolesController@destroy']);
    Route::get('core/userRoles/{userRoles}', ['as' => 'core.userRoles.show', 'uses' => 'Core\UserRolesController@show']);
    Route::get('core/userRoles/{userRoles}/edit', ['as' => 'core.userRoles.edit', 'uses' => 'Core\UserRolesController@edit']);


    Route::get('core/users', ['as' => 'core.users.index', 'uses' => 'Core\UsersController@index']);
    Route::post('core/users', ['as' => 'core.users.store', 'uses' => 'Core\UsersController@store']);
    Route::get('core/users/create', ['as' => 'core.users.create', 'uses' => 'Core\UsersController@create']);
    Route::put('core/users/{users}', ['as' => 'core.users.update', 'uses' => 'Core\UsersController@update']);
    Route::patch('core/users/{users}', ['as' => 'core.users.update', 'uses' => 'Core\UsersController@update']);
    Route::delete('core/users/{users}', ['as' => 'core.users.destroy', 'uses' => 'Core\UsersController@destroy']);
    Route::get('core/users/{users}', ['as' => 'core.users.show', 'uses' => 'Core\UsersController@show']);
    Route::get('core/users/{users}/edit', ['as' => 'core.users.edit', 'uses' => 'Core\UsersController@edit']);


    Route::get('core/userSettings', ['as' => 'core.userSettings.index', 'uses' => 'Core\UserSettingsController@index']);
    Route::post('core/userSettings', ['as' => 'core.userSettings.store', 'uses' => 'Core\UserSettingsController@store']);
    Route::get('core/userSettings/create', ['as' => 'core.userSettings.create', 'uses' => 'Core\UserSettingsController@create']);
    Route::put('core/userSettings/{userSettings}', ['as' => 'core.userSettings.update', 'uses' => 'Core\UserSettingsController@update']);
    Route::patch('core/userSettings/{userSettings}', ['as' => 'core.userSettings.update', 'uses' => 'Core\UserSettingsController@update']);
    Route::delete('core/userSettings/{userSettings}', ['as' => 'core.userSettings.destroy', 'uses' => 'Core\UserSettingsController@destroy']);
    Route::get('core/userSettings/{userSettings}', ['as' => 'core.userSettings.show', 'uses' => 'Core\UserSettingsController@show']);
    Route::get('core/userSettings/{userSettings}/edit', ['as' => 'core.userSettings.edit', 'uses' => 'Core\UserSettingsController@edit']);


    Route::get('core/teamAssigns', ['as' => 'core.teamAssigns.index', 'uses' => 'Core\TeamAssignsController@index']);
    Route::post('core/teamAssigns', ['as' => 'core.teamAssigns.store', 'uses' => 'Core\TeamAssignsController@store']);
    Route::get('core/teamAssigns/create', ['as' => 'core.teamAssigns.create', 'uses' => 'Core\TeamAssignsController@create']);
    Route::put('core/teamAssigns/{teamAssigns}', ['as' => 'core.teamAssigns.update', 'uses' => 'Core\TeamAssignsController@update']);
    Route::patch('core/teamAssigns/{teamAssigns}', ['as' => 'core.teamAssigns.update', 'uses' => 'Core\TeamAssignsController@update']);
    Route::delete('core/teamAssigns/{teamAssigns}', ['as' => 'core.teamAssigns.destroy', 'uses' => 'Core\TeamAssignsController@destroy']);
    Route::get('core/teamAssigns/{teamAssigns}', ['as' => 'core.teamAssigns.show', 'uses' => 'Core\TeamAssignsController@show']);
    Route::get('core/teamAssigns/{teamAssigns}/edit', ['as' => 'core.teamAssigns.edit', 'uses' => 'Core\TeamAssignsController@edit']);


});



