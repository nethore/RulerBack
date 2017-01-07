<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Picture extends Model
{
  protected $table = "picture";
  public $timestamps = false;

  public static function getNbrPictures()
  {
    return DB::table('picture')
              ->count();
  }

}
