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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/account', 'AccountController@index');
Route::post('/account', 'AccountController@update');

Route::get('/test', 'TestController@index')->name('test');
Route::get('/overzicht', 'OverzichtController@index')->name('overzicht');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/first-letter', 'FirstLetterController@index')->name('first-letter');
    Route::get('/receive-letter', 'ReceiveLetterController@index')->name('receive-letter');
    Route::get('/prepare', 'PrepareController@index')->name('prepare');
    Route::get('/judgement-day', 'JudgementDayController@index')->name('judgement-day');
    Route::get('/aftermath', 'AftermathController@index')->name('aftermath');
});

Route::get('/how-it-works', function () {
    return view('how-it-works');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/algemene-voorwaarden', function () {
    return view('algemene-voorwaarden');
})->name('algemene-voorwaarden');

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/faq', function () {
    return view('faq');
});
