<?php

Route::group(['middleware' => 'web', 'prefix' => 'calendar', 'namespace' => 'Modules\Calendar\Http\Controllers'], function () {
    Route::get('/', ['uses' => 'SampleController@calendar']);
    Route::resource('calendar_events', 'CalendarEventController');
});
