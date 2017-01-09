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

Route::group(['middleware' => 'auth', 'prefix' => '/admin'], function () {
  Route::get('/', 'PageController@welcome')->name('welcome');
  Route::get('register', 'Auth\AuthController@showRegistrationForm')->name('register.create');
  Route::post('register', 'Auth\AuthController@register');
});

Route::group(['middleware' => 'auth', 'prefix' => '/admin/celebrity'], function () {
  Route::get('/index', 'CelebrityController@index')->name('celebrity.index');
  Route::get('/remove/{id}', 'CelebrityController@remove')->name('celebrity.remove');
  Route::any('/create', 'CelebrityController@create')->name('celebrity.create');
  Route::any('/update/{id}', 'CelebrityController@update')->name('celebrity.update');
});

Route::group(['middleware' => 'auth', 'prefix' => '/admin/picture'], function () {
  Route::get('/index', 'PictureController@index')->name('picture.index');
  Route::get('/remove/{id}', 'PictureController@remove')->name('picture.remove');
  Route::any('/create', 'PictureController@create')->name('picture.create');
  Route::any('/update/{id}', 'PictureController@update')->name('picture.update');
});

Route::get('/json', ['middleware' => 'cors', function () {
    return App\Celebrity::all();
}]);

Route::get('/', function(){
    return view('ruler/index');
})->name('ruler');

// Route::auth();

Route::get('login', 'Auth\AuthController@showLoginForm');
Route::post('login', 'Auth\AuthController@login');
Route::get('logout', 'Auth\AuthController@logout');


// Password Reset Routes...
Route::get('password/reset/{token?}', 'Auth\PasswordController@showResetForm');
Route::post('password/email', 'Auth\PasswordController@sendResetLinkEmail');
Route::post('password/reset', 'Auth\PasswordController@reset');
