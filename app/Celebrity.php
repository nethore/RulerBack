<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Celebrity extends Model
{
  protected $table = "celebrity";
  public $timestamps = false;

  protected $hidden = ['picture_id', 'picture', 'dateAdded'];
  protected $appends = ['pictureUrl'];

  public function getPictureUrlAttribute($value) {
      $pictureUrl = null;
      if ($this->picture) {
          $pictureUrl = $this->picture->url;
      }
      return $pictureUrl;
  }

  public static function getNbrCelebrities()
  {
    return DB::table('celebrity')
              ->count();
  }

  public static function getAvgSize()
  {
    return DB::table('celebrity')
              ->avg('size');
  }

  public static function getNbrMen()
  {
    return DB::table('celebrity')
              ->where('gender', 1)
              ->count();
  }


  public function picture()
  {
      return $this->belongsTo('App\Picture');
  }

}
