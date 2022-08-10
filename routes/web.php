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


Route::get('Programa/inser', 'ProgramaController@ViewInsert')->name('ViewInsert');

Route::get('Programa/view', 'ProgramaController@ViewPro')->name('ViewPro');

Route::post('Programa/inser', 'ProgramaController@InsertPro')->name('InsertPro');

Route::get('Programa/delete/{id}', 'ProgramaController@DeletePro')->name('DeletePro');

Route::get('Programa/update/{id}', 'ProgramaController@DatosUpdate')->name('ViewUpdate');

Route::post('Programa/update', 'ProgramaController@UpdateBD')->name('UpdateBdPrograma');
