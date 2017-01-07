<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Celebrity;
use App\Picture;

class PageController extends Controller
{
  public function welcome() {

     $nbrCelebrities = Celebrity::getNbrCelebrities();
     $avgSize = Celebrity::getAvgSize();
     $nbrPictures = Picture::getNbrPictures();
     $pourcentageMen = (Celebrity::getNbrMen() * 100) / Celebrity::getNbrCelebrities();

    return view('welcome', [
      'nbrCelebrities' => $nbrCelebrities,
      'avgSize' => $avgSize,
      'nbrPictures' => $nbrPictures,
      'pourcentageMen' => $pourcentageMen
    ]);

  }}
