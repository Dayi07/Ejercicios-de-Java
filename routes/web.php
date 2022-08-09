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

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('Programa/insert', function () {
    return view('Programa/insert');
});

Route::get('Programa/view', 'ProgramaController@ViwePro')->name('InsertView');

Route::post('Programa/insert', 'ProgramaController@InsertPro')->name('InsertPro');

Route::post('Programa/delete/{id}', 'ProgramaController@DeletePro')->name('DeletePro');

Route::get('Programa/update/{id}', 'ProgramaController@DatosUpdate')->name('DatosUpdate');
