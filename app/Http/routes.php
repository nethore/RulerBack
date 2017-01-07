<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'PageController@welcome')->name('welcome');

Route::group(['prefix' => 'celebrity'], function () {
  Route::get('/index', 'CelebrityController@index')->name('celebrity.index');
  Route::get('/remove/{id}', 'CelebrityController@remove')->name('celebrity.remove');
  Route::any('/create', 'CelebrityController@create')->name('celebrity.create');
  Route::any('/update/{id}', 'CelebrityController@update')->name('celebrity.update');
});

Route::group(['prefix' => 'picture'], function () {
  Route::get('/index', 'PictureController@index')->name('picture.index');
  Route::get('/remove/{id}', 'PictureController@remove')->name('picture.remove');
  Route::any('/create', 'PictureController@create')->name('picture.create');
  Route::any('/update/{id}', 'PictureController@update')->name('picture.update');
});

Route::get('/json', function () {
    return App\Celebrity::all();
});
