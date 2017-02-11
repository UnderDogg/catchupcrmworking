<?php

Route::group(['middleware' => 'web', 'prefix' => 'relations', 'namespace' => 'Modules\Relations\Http\Controllers'], function()
{
    Route::get('/', 'RelationsController@index');

    Route::get(   'relations',                         ['as' => 'relations.relations.index',            'uses' => 'RelationsController@index']);


    Route::post(  'relation',                         ['as' => 'relations.relations.store',            'uses' => 'RelationsController@store']);

    Route::get(   'relations/manage',                  ['as' => 'relations.relations.manage',            'uses' => 'RelationsController@index']);
    Route::get(   'relation/create',                  ['as' => 'relations.relations.create',           'uses' => 'RelationsController@create']);
    Route::get(   'relation/{relationId}',                ['as' => 'relations.relations.show',             'uses' => 'RelationsController@show']);
    Route::patch( 'relation/{relationId}',                ['as' => 'relations.relations.patch',            'uses' => 'RelationsController@update']);
    Route::put(   'relation/{relationId}',                ['as' => 'relations.relations.update',           'uses' => 'RelationsController@update']);
    Route::delete('relation/{relationId}',                ['as' => 'relations.relations.destroy',          'uses' => 'RelationsController@destroy']);
    Route::get(   'relation/{relationId}/edit',           ['as' => 'relations.relations.edit',             'uses' => 'RelationsController@edit']);
    Route::get(   'relation/{relationId}/confirm-delete', ['as' => 'relations.relations.confirm-delete',   'uses' => 'RelationsController@getModalDelete']);
    Route::get(   'relation/{relationId}/delete',         ['as' => 'relations.relations.delete',           'uses' => 'RelationsController@destroy']);


});
