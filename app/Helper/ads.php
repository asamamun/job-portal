<?php
use App\Models\Advertisement;
class ads{

  public static function get($title){
    $image = Advertisement::where('title', $title)->first();
    return $image ? asset('storage/'.$image->file) : asset('no_image.png');
  }
}