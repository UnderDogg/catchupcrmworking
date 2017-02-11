<?php

Route::group(['middleware' => 'web', 'prefix' => '', 'namespace' => 'Modules\Products\Http\Controllers'], function () {

    Route::get('products/products', ['as' => 'products.products.index', 'uses' => 'Products\ProductsController@index']);
    Route::post('products/products', ['as' => 'products.products.store', 'uses' => 'Products\ProductsController@store']);
    Route::get('products/products/create', ['as' => 'products.products.create', 'uses' => 'Products\ProductsController@create']);
    Route::put('products/products/{products}', ['as' => 'products.products.update', 'uses' => 'Products\ProductsController@update']);
    Route::patch('products/products/{products}', ['as' => 'products.products.update', 'uses' => 'Products\ProductsController@update']);
    Route::delete('products/products/{products}', ['as' => 'products.products.destroy', 'uses' => 'Products\ProductsController@destroy']);
    Route::get('products/products/{products}', ['as' => 'products.products.show', 'uses' => 'Products\ProductsController@show']);
    Route::get('products/products/{products}/edit', ['as' => 'products.products.edit', 'uses' => 'Products\ProductsController@edit']);


});
