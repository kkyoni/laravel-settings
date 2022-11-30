<?php

Route::group(['middleware' => config('settings.middleware')], function () {
    Route::resource(config('settings.route'), 'Kkyoni\Laravelsettings\app\Http\Controllers\SettingsController');
    Route::get(config('settings.route') . '/download/{setting}', 'Kkyoni\Laravelsettings\app\Http\Controllers\SettingsController@fileDownload');
});
