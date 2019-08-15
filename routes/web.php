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

Route::get('/', 'EpisodeController@index');

Route::get('/anime/{anime}', 'SeriesController@index')->name('detail.anime');

Route::get('/anime/{anime}/{id}', 'EpisodeController@show')->name('video.anime');

Route::get('/jadwal-anime', 'JadwalController@show')->name('show.jadwal');

Route::get('/list-genre', 'GenreController@index')->name('list.genre');

Route::get('/list-anime', 'SeriesController@show')->name('show.list');



// ============================ SEARCH ============================ \\


Route::get('/genre/{id}', 'SearchController@genre')->name('s.genre');

Route::post('/search', 'SearchController@text')->name('s.text');


Route::middleware('auth')->group(function(){

// ============================ SERIES ============================ \\


Route::get('/dashboard/series/create', 'SeriesController@create')->name('create.series');

Route::post('/dashboard/series/create/processing', 'SeriesController@store')->name('insert.series');

Route::get('/dashboard/series/edit/{judul}', 'SeriesController@edit')->name('edit.series');

Route::post('/dashboard/series/edit/{judul}/processing', 'SeriesController@update')->name('update.series');

Route::get('/dashboard/series/delete/{judul}', 'SeriesController@destroy')->name('delete.series');


// ============================ Episode ============================ \\

Route::get('/dashboard/{series}/episode', 'EpisodeController@list')->name('list.epsd');

Route::get('/dashboard/episode/tambah', 'EpisodeController@create')->name('create.episode');

Route::post('/dashboard/episode/tambah/processing', 'EpisodeController@store')->name('insert.episode');

Route::get('/dashboard/episode/delete/{id}', 'EpisodeController@destroy')->name('delete.episode');


// ============================ JADWAL ============================ \\


Route::get('/dashboard/jadwal', 'JadwalController@index')->name('dash.jadwal');

Route::get('/dashboard/jadwal/{hari}', 'JadwalController@create')->name('create.jadwal');

Route::post('/dashboard/jadwal/insert/processing', 'JadwalController@store')->name('insert.jadwal');

Route::get('/dashboard/jadwal/delete/{hari}/{id}', 'JadwalController@destroy')->name('delete.jadwal');


// ============================ AJAX (Comingsoon) ============================ \\


Route::get('/ajax/series', 'SeriesController@ajax')->name('ajax.series');


});





// ============================ ?????? ============================ \\

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
