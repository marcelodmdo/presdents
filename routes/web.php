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
Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/tratamentos', function () {
    return view('tratamentos');
})->name('tratamentos');

Route::get('/quem-somos', function () {
    return view('about');
})->name('about');

// Route::get('/materiais', function () {
//     return view('materiais');
// })->name('materiais');

Route::get('/institutional', function () {
    return view('institutional');
})->name('institutional');

Route::get('/agendamentos', function () {
    return view('agendamentos');
})->name('agendamentos');

Route::get('/contato', function () {
    return view('contato');
})->name('contato');

Route::get('/material', function () {
    return view('material');
});
Route::get('/email-template', function () {
    return view('mail.contato');
});

Route::get('/materialcss', function () {
    return view('materialcss');
});


Route::get('/agendar', function () {
    return redirect('https://agendar.dentaloffice.com.br/4bwx4ax');
})->name('agendar');

Route::post('/enviar-contato', 'ContatoController@enviar');
Route::get('/materiais', 'MateriaisController@index')->name('materiais');