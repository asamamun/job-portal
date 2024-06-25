<?php
use App\Models\Setting;
class Settings{
  public static $id = 1;

  public static function get(){
    return Setting::find(self::$id)->first();
  }
}