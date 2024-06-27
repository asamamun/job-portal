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

function imageToBase64($path) {
  if (file_exists($path)) {
      $type = pathinfo($path, PATHINFO_EXTENSION);
      $data = file_get_contents($path);
      return 'data:image/' . $type . ';base64,' . base64_encode($data);
  }
  return 'no file';
}

