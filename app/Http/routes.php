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

Route::get('/', 'PagesController@index')->name('index');

Route::get('/enem', 'EnemController@index')->name('enem');
Route::get('/enem/quiz', 'EnemController@quiz')->name('enem.quiz');
Route::post('/enem/resultado', 'EnemController@verifica_respostas')->name('enem.resultado');

Route::get('/videoaulas', 'PagesController@videoaulas')->name('videoaulas');
Route::get('/contextualizacao', 'PagesController@contextualizacao')->name('contextualizacao');
Route::get('/resolucao', 'PagesController@resolucao')->name('resolucao');

Route::get('/lista', 'PagesController@lista')->name('lista');
Route::get('/lista/quiz', 'PagesController@quiz_lista')->name('lista.quiz');
Route::post('/lista/quiz/resultado', 'PagesController@quiz_resultado')->name('lista.resultado');

Route::get('/video/{id}', 'VideoController@show')->name('video');
