<?php

Route::group(['middleware' => 'web', 'prefix' => 'invoices', 'namespace' => 'Modules\Invoices\Http\Controllers'], function () {


    Route::get('invoices/invoices', ['as' => 'invoices.invoices.index', 'uses' => 'Invoices\InvoicesController@index']);
    Route::post('invoices/invoices', ['as' => 'invoices.invoices.store', 'uses' => 'Invoices\InvoicesController@store']);
    Route::get('invoices/invoices/create', ['as' => 'invoices.invoices.create', 'uses' => 'Invoices\InvoicesController@create']);
    Route::put('invoices/invoices/{invoices}', ['as' => 'invoices.invoices.update', 'uses' => 'Invoices\InvoicesController@update']);
    Route::patch('invoices/invoices/{invoices}', ['as' => 'invoices.invoices.update', 'uses' => 'Invoices\InvoicesController@update']);
    Route::delete('invoices/invoices/{invoices}', ['as' => 'invoices.invoices.destroy', 'uses' => 'Invoices\InvoicesController@destroy']);
    Route::get('invoices/invoices/{invoices}', ['as' => 'invoices.invoices.show', 'uses' => 'Invoices\InvoicesController@show']);
    Route::get('invoices/invoices/{invoices}/edit', ['as' => 'invoices.invoices.edit', 'uses' => 'Invoices\InvoicesController@edit']);


    Route::get('invoices/invoicesDesigns', ['as' => 'invoices.invoicesDesigns.index', 'uses' => 'Invoices\InvoicesDesignsController@index']);
    Route::post('invoices/invoicesDesigns', ['as' => 'invoices.invoicesDesigns.store', 'uses' => 'Invoices\InvoicesDesignsController@store']);
    Route::get('invoices/invoicesDesigns/create', ['as' => 'invoices.invoicesDesigns.create', 'uses' => 'Invoices\InvoicesDesignsController@create']);
    Route::put('invoices/invoicesDesigns/{invoicesDesigns}', ['as' => 'invoices.invoicesDesigns.update', 'uses' => 'Invoices\InvoicesDesignsController@update']);
    Route::patch('invoices/invoicesDesigns/{invoicesDesigns}', ['as' => 'invoices.invoicesDesigns.update', 'uses' => 'Invoices\InvoicesDesignsController@update']);
    Route::delete('invoices/invoicesDesigns/{invoicesDesigns}', ['as' => 'invoices.invoicesDesigns.destroy', 'uses' => 'Invoices\InvoicesDesignsController@destroy']);
    Route::get('invoices/invoicesDesigns/{invoicesDesigns}', ['as' => 'invoices.invoicesDesigns.show', 'uses' => 'Invoices\InvoicesDesignsController@show']);
    Route::get('invoices/invoicesDesigns/{invoicesDesigns}/edit', ['as' => 'invoices.invoicesDesigns.edit', 'uses' => 'Invoices\InvoicesDesignsController@edit']);


    Route::get('invoices/invoiceItems', ['as' => 'invoices.invoiceItems.index', 'uses' => 'Invoices\InvoiceItemsController@index']);
    Route::post('invoices/invoiceItems', ['as' => 'invoices.invoiceItems.store', 'uses' => 'Invoices\InvoiceItemsController@store']);
    Route::get('invoices/invoiceItems/create', ['as' => 'invoices.invoiceItems.create', 'uses' => 'Invoices\InvoiceItemsController@create']);
    Route::put('invoices/invoiceItems/{invoiceItems}', ['as' => 'invoices.invoiceItems.update', 'uses' => 'Invoices\InvoiceItemsController@update']);
    Route::patch('invoices/invoiceItems/{invoiceItems}', ['as' => 'invoices.invoiceItems.update', 'uses' => 'Invoices\InvoiceItemsController@update']);
    Route::delete('invoices/invoiceItems/{invoiceItems}', ['as' => 'invoices.invoiceItems.destroy', 'uses' => 'Invoices\InvoiceItemsController@destroy']);
    Route::get('invoices/invoiceItems/{invoiceItems}', ['as' => 'invoices.invoiceItems.show', 'uses' => 'Invoices\InvoiceItemsController@show']);
    Route::get('invoices/invoiceItems/{invoiceItems}/edit', ['as' => 'invoices.invoiceItems.edit', 'uses' => 'Invoices\InvoiceItemsController@edit']);
});
