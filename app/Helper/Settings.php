<?php
class Settings{
  public static $name = 'default';

  public static function title(){
    $setting = Setting::where('name', self::$name)->first();
    echo $setting->title ?? 'Settings';
  }
}