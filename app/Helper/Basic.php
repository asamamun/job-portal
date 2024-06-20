<?php
//namespace App;

use App\Models\Setting;

if (! function_exists('setting')) {
  function title($name = 'default')
  {
    $setting = Setting::where('name', $name)->first();
    echo $setting->title ?? 'Settings';
  }
}

