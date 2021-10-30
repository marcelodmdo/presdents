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

// Route::get('/', function () {
//     return view('home');
// });
Route::get('/', 'PageController@index')->name('home');

// Route::get('/tratamentos', 'PageController@tratamentos')->name('tratamentos');

Route::get('/quem-somos', 'PageController@about')->name('about');

// Route::get('/materiais', function () {
//     return view('materiais');
// })->name('materiais');

// Route::get('/institutional', function () {
//     return view('institutional');
// })->name('institutional');

Route::get('/agendamentos', 'PageController@agendamentos')->name('agendamentos');

Route::get('/contato', 'PageController@contato')->name('contato');

// Route::get('/material', function () {
//     return view('material');
// });
// Route::get('/email-template', function () {
//     return view('mail.contato');
// });

// Route::get('/materialcss', function () {
//     return view('materialcss');
// });


Route::get('/agendar', 'PageController@agendar')->name('agendar');

Route::post('/enviar-contato', 'ContatoController@enviar');
Route::get('/materiais', 'MateriaisController@index')->name('materiais');
Route::get('/materiais/{any}', 'MateriaisController@reading');
Route::get('/tratamentos', 'TratamentosController@index')->name('tratamentos');
Route::get('/tratamento/{tipo}/{slug}', 'TratamentosController@reading');