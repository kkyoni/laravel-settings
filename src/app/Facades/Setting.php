<?php

namespace Jaymin\Laravelsettings\app\Facades;

use Illuminate\Support\Facades\Facade;
use Jaymin\Laravelsettings\app\SettingsHelper;

class Setting extends Facade
{
    /**
     * @return mixed
     */
    protected static function getFacadeAccessor()
    {
        return SettingsHelper::class;
    }
}