<?php

Route::group(['middleware' => 'web', 'prefix' => 'relations', 'namespace' => 'Modules\Relations\Http\Controllers'], function () {
    Route::get('/', 'RelationsController@index');

    Route::get('relations', ['as' => 'relations.relations.index', 'uses' => 'RelationsController@index']);


    Route::post('relation', ['as' => 'relations.relations.store', 'uses' => 'RelationsController@store']);

    Route::get('relations/manage', ['as' => 'relations.relations.manage', 'uses' => 'RelationsController@index']);
    Route::get('relation/create', ['as' => 'relations.relations.create', 'uses' => 'RelationsController@create']);
    Route::get('relation/{relationId}', ['as' => 'relations.relations.show', 'uses' => 'RelationsController@show']);
    Route::patch('relation/{relationId}', ['as' => 'relations.relations.patch', 'uses' => 'RelationsController@update']);
    Route::put('relation/{relationId}', ['as' => 'relations.relations.update', 'uses' => 'RelationsController@update']);
    Route::delete('relation/{relationId}', ['as' => 'relations.relations.destroy', 'uses' => 'RelationsController@destroy']);
    Route::get('relation/{relationId}/edit', ['as' => 'relations.relations.edit', 'uses' => 'RelationsController@edit']);
    Route::get('relation/{relationId}/confirm-delete', ['as' => 'relations.relations.confirm-delete', 'uses' => 'RelationsController@getModalDelete']);
    Route::get('relation/{relationId}/delete', ['as' => 'relations.relations.delete', 'uses' => 'RelationsController@destroy']);


    Route::get('relations/relationTypes', ['as' => 'relations.relationTypes.index', 'uses' => 'Relations\RelationTypeController@index']);
    Route::post('relations/relationTypes', ['as' => 'relations.relationTypes.store', 'uses' => 'Relations\RelationTypeController@store']);
    Route::get('relations/relationTypes/create', ['as' => 'relations.relationTypes.create', 'uses' => 'Relations\RelationTypeController@create']);
    Route::put('relations/relationTypes/{relationTypes}', ['as' => 'relations.relationTypes.update', 'uses' => 'Relations\RelationTypeController@update']);
    Route::patch('relations/relationTypes/{relationTypes}', ['as' => 'relations.relationTypes.update', 'uses' => 'Relations\RelationTypeController@update']);
    Route::delete('relations/relationTypes/{relationTypes}', ['as' => 'relations.relationTypes.destroy', 'uses' => 'Relations\RelationTypeController@destroy']);
    Route::get('relations/relationTypes/{relationTypes}', ['as' => 'relations.relationTypes.show', 'uses' => 'Relations\RelationTypeController@show']);
    Route::get('relations/relationTypes/{relationTypes}/edit', ['as' => 'relations.relationTypes.edit', 'uses' => 'Relations\RelationTypeController@edit']);


    Route::get('relations/contactTypes', ['as' => 'relations.contactTypes.index', 'uses' => 'Relations\ContactTypeController@index']);
    Route::post('relations/contactTypes', ['as' => 'relations.contactTypes.store', 'uses' => 'Relations\ContactTypeController@store']);
    Route::get('relations/contactTypes/create', ['as' => 'relations.contactTypes.create', 'uses' => 'Relations\ContactTypeController@create']);
    Route::put('relations/contactTypes/{contactTypes}', ['as' => 'relations.contactTypes.update', 'uses' => 'Relations\ContactTypeController@update']);
    Route::patch('relations/contactTypes/{contactTypes}', ['as' => 'relations.contactTypes.update', 'uses' => 'Relations\ContactTypeController@update']);
    Route::delete('relations/contactTypes/{contactTypes}', ['as' => 'relations.contactTypes.destroy', 'uses' => 'Relations\ContactTypeController@destroy']);
    Route::get('relations/contactTypes/{contactTypes}', ['as' => 'relations.contactTypes.show', 'uses' => 'Relations\ContactTypeController@show']);
    Route::get('relations/contactTypes/{contactTypes}/edit', ['as' => 'relations.contactTypes.edit', 'uses' => 'Relations\ContactTypeController@edit']);


    Route::get('relations/salutations', ['as' => 'relations.salutations.index', 'uses' => 'Relations\SalutationController@index']);
    Route::post('relations/salutations', ['as' => 'relations.salutations.store', 'uses' => 'Relations\SalutationController@store']);
    Route::get('relations/salutations/create', ['as' => 'relations.salutations.create', 'uses' => 'Relations\SalutationController@create']);
    Route::put('relations/salutations/{salutations}', ['as' => 'relations.salutations.update', 'uses' => 'Relations\SalutationController@update']);
    Route::patch('relations/salutations/{salutations}', ['as' => 'relations.salutations.update', 'uses' => 'Relations\SalutationController@update']);
    Route::delete('relations/salutations/{salutations}', ['as' => 'relations.salutations.destroy', 'uses' => 'Relations\SalutationController@destroy']);
    Route::get('relations/salutations/{salutations}', ['as' => 'relations.salutations.show', 'uses' => 'Relations\SalutationController@show']);
    Route::get('relations/salutations/{salutations}/edit', ['as' => 'relations.salutations.edit', 'uses' => 'Relations\SalutationController@edit']);


    Route::get('relations/relations', ['as' => 'relations.relations.index', 'uses' => 'Relations\RelationsController@index']);
    Route::post('relations/relations', ['as' => 'relations.relations.store', 'uses' => 'Relations\RelationsController@store']);
    Route::get('relations/relations/create', ['as' => 'relations.relations.create', 'uses' => 'Relations\RelationsController@create']);
    Route::put('relations/relations/{relations}', ['as' => 'relations.relations.update', 'uses' => 'Relations\RelationsController@update']);
    Route::patch('relations/relations/{relations}', ['as' => 'relations.relations.update', 'uses' => 'Relations\RelationsController@update']);
    Route::delete('relations/relations/{relations}', ['as' => 'relations.relations.destroy', 'uses' => 'Relations\RelationsController@destroy']);
    Route::get('relations/relations/{relations}', ['as' => 'relations.relations.show', 'uses' => 'Relations\RelationsController@show']);
    Route::get('relations/relations/{relations}/edit', ['as' => 'relations.relations.edit', 'uses' => 'Relations\RelationsController@edit']);


    Route::get('relations/relationAdresses', ['as' => 'relations.relationAdresses.index', 'uses' => 'Relations\RelationAdressesController@index']);
    Route::post('relations/relationAdresses', ['as' => 'relations.relationAdresses.store', 'uses' => 'Relations\RelationAdressesController@store']);
    Route::get('relations/relationAdresses/create', ['as' => 'relations.relationAdresses.create', 'uses' => 'Relations\RelationAdressesController@create']);
    Route::put('relations/relationAdresses/{relationAdresses}', ['as' => 'relations.relationAdresses.update', 'uses' => 'Relations\RelationAdressesController@update']);
    Route::patch('relations/relationAdresses/{relationAdresses}', ['as' => 'relations.relationAdresses.update', 'uses' => 'Relations\RelationAdressesController@update']);
    Route::delete('relations/relationAdresses/{relationAdresses}', ['as' => 'relations.relationAdresses.destroy', 'uses' => 'Relations\RelationAdressesController@destroy']);
    Route::get('relations/relationAdresses/{relationAdresses}', ['as' => 'relations.relationAdresses.show', 'uses' => 'Relations\RelationAdressesController@show']);
    Route::get('relations/relationAdresses/{relationAdresses}/edit', ['as' => 'relations.relationAdresses.edit', 'uses' => 'Relations\RelationAdressesController@edit']);


    Route::get('relations/relationCommunications', ['as' => 'relations.relationCommunications.index', 'uses' => 'Relations\RelationCommunicationController@index']);
    Route::post('relations/relationCommunications', ['as' => 'relations.relationCommunications.store', 'uses' => 'Relations\RelationCommunicationController@store']);
    Route::get('relations/relationCommunications/create', ['as' => 'relations.relationCommunications.create', 'uses' => 'Relations\RelationCommunicationController@create']);
    Route::put('relations/relationCommunications/{relationCommunications}', ['as' => 'relations.relationCommunications.update', 'uses' => 'Relations\RelationCommunicationController@update']);
    Route::patch('relations/relationCommunications/{relationCommunications}', ['as' => 'relations.relationCommunications.update', 'uses' => 'Relations\RelationCommunicationController@update']);
    Route::delete('relations/relationCommunications/{relationCommunications}', ['as' => 'relations.relationCommunications.destroy', 'uses' => 'Relations\RelationCommunicationController@destroy']);
    Route::get('relations/relationCommunications/{relationCommunications}', ['as' => 'relations.relationCommunications.show', 'uses' => 'Relations\RelationCommunicationController@show']);
    Route::get('relations/relationCommunications/{relationCommunications}/edit', ['as' => 'relations.relationCommunications.edit', 'uses' => 'Relations\RelationCommunicationController@edit']);


    Route::get('relations/relationContracts', ['as' => 'relations.relationContracts.index', 'uses' => 'Relations\RelationContractsController@index']);
    Route::post('relations/relationContracts', ['as' => 'relations.relationContracts.store', 'uses' => 'Relations\RelationContractsController@store']);
    Route::get('relations/relationContracts/create', ['as' => 'relations.relationContracts.create', 'uses' => 'Relations\RelationContractsController@create']);
    Route::put('relations/relationContracts/{relationContracts}', ['as' => 'relations.relationContracts.update', 'uses' => 'Relations\RelationContractsController@update']);
    Route::patch('relations/relationContracts/{relationContracts}', ['as' => 'relations.relationContracts.update', 'uses' => 'Relations\RelationContractsController@update']);
    Route::delete('relations/relationContracts/{relationContracts}', ['as' => 'relations.relationContracts.destroy', 'uses' => 'Relations\RelationContractsController@destroy']);
    Route::get('relations/relationContracts/{relationContracts}', ['as' => 'relations.relationContracts.show', 'uses' => 'Relations\RelationContractsController@show']);
    Route::get('relations/relationContracts/{relationContracts}/edit', ['as' => 'relations.relationContracts.edit', 'uses' => 'Relations\RelationContractsController@edit']);


    Route::get('relations/relationMailAdresses', ['as' => 'relations.relationMailAdresses.index', 'uses' => 'Relations\RelationMailAdressesController@index']);
    Route::post('relations/relationMailAdresses', ['as' => 'relations.relationMailAdresses.store', 'uses' => 'Relations\RelationMailAdressesController@store']);
    Route::get('relations/relationMailAdresses/create', ['as' => 'relations.relationMailAdresses.create', 'uses' => 'Relations\RelationMailAdressesController@create']);
    Route::put('relations/relationMailAdresses/{relationMailAdresses}', ['as' => 'relations.relationMailAdresses.update', 'uses' => 'Relations\RelationMailAdressesController@update']);
    Route::patch('relations/relationMailAdresses/{relationMailAdresses}', ['as' => 'relations.relationMailAdresses.update', 'uses' => 'Relations\RelationMailAdressesController@update']);
    Route::delete('relations/relationMailAdresses/{relationMailAdresses}', ['as' => 'relations.relationMailAdresses.destroy', 'uses' => 'Relations\RelationMailAdressesController@destroy']);
    Route::get('relations/relationMailAdresses/{relationMailAdresses}', ['as' => 'relations.relationMailAdresses.show', 'uses' => 'Relations\RelationMailAdressesController@show']);
    Route::get('relations/relationMailAdresses/{relationMailAdresses}/edit', ['as' => 'relations.relationMailAdresses.edit', 'uses' => 'Relations\RelationMailAdressesController@edit']);
});
