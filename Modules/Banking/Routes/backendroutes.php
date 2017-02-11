<?php

Route::group(['middleware' => 'auth', 'prefix' => 'banking', 'namespace' => 'Modules\Banking\Http\Controllers'], function () {
});
