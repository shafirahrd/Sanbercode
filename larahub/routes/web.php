<?php

use Illuminate\Support\Facades\Route;

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

Route::post('/pertanyaan', 'QuestionsController@store');
Route::get('/pertanyaan', 'QuestionsController@index');
Route::get('/pertanyaan/create', 'QuestionsController@create');

Route::post('/jawaban/{pertanyaan_id}', 'AnswersController@store')->name('jawabanStore');
Route::get('/jawaban/{pertanyaan_id}', 'AnswersController@index');
