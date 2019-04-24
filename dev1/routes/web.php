<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*
Route::get('document/download/{key}','DocumentController@download')
    ->where('key','[A-Za-z0-9]{32}')->nam('document.download');
*/
Route::resource('artiste', 'ArtisteController');

Route::resource('cinema', 'CinemaController');

Route::resource('film', 'FilmController');

Route::resource('salle', 'SalleController');

Route::resource('seance', 'SeanceController');

Route::get('/', function () {
    return view('welcome');
})->name('home');
/*
Route::prefix('film')->group(function(){

    Route::get('acteurs/{film}','FilmController@acteurs')->name('film.acteurs');

})*/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('profile', 'UserController@profile')->middleware('auth');


