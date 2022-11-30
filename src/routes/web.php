<?php

Route::group(['middleware' => config('settings.middleware')], function () {
    Route::resource(config('settings.route'), 'Jaymin\Laravelsettings\app\Http\Controllers\SettingsController');
    Route::get(config('settings.route') . '/download/{setting}', 'Jaymin\Laravelsettings\app\Http\Controllers\SettingsController@fileDownload');
});
