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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/index', 'indexController@index')->name('indexController.index');

//Hojas de vida
Route::get('/hojas-de-vida', 'hojasdevida@index')->name('hojasdevida.index');
Route::get('/hojas-de-vida/create', 'hojasdevida@create')->name('hojasdevida.create');
Route::post('/hojas-de-vida/store', 'hojasdevida@store')->name('hojasdevida.store');
Route::get('/hojas-de-vida/{id}/edit', 'hojasdevida@edit')->name('hojasdevida.edit');
Route::put('/hojas-de-vida/{user}', 'hojasdevida@update')->name('hojasdevida.update');
Route::delete('/hojas-de-vida/{user}', 'hojasdevida@destroy')->name('hojasdevida.destroy');
Route::get('/hojas-de-vida/{id}', 'hojasdevida@show')->name('hojasdevida.show');

//Informacion academica
Route::get('/informacion-academica', 'InformacionAcademicaController@index')->name('informacionacademica.index');
Route::get('/informacion-academica/create', 'InformacionAcademicaController@create')->name('informacionacademica.create');
Route::post('/informacion-academica/store', 'InformacionAcademicaController@store')->name('informacionacademica.store');
Route::get('/informacion-academica/{id}/edit', 'InformacionAcademicaController@edit')->name('informacionacademica.edit');
Route::put('/informacion-academica/{academica}', 'InformacionAcademicaController@update')->name('informacionacademica.update');
Route::delete('/informacion-academica/{informacionAcademica}', 'InformacionAcademicaController@destroy')->name('informacionacademica.destroy');
Route::get('/informacion-academica/{id}', 'InformacionAcademicaController@show')->name('informacionacademica.show');

//Informacion medica
Route::get('/informacion-medica', 'InformacionMedicaController@index')->name('informacionmedica.index');
Route::get('/informacion-medica/create', 'InformacionMedicaController@create')->name('informacionmedica.create');
Route::post('/informacion-medica/store', 'InformacionMedicaController@store')->name('informacionmedica.store');
Route::get('/informacion-medica/{id}/edit', 'InformacionMedicaController@edit')->name('informacionmedica.edit');
Route::put('/informacion-medica/{medica}', 'InformacionMedicaController@update')->name('informacionmedica.update');
Route::delete('/informacion-medica/{informacionmedica}', 'InformacionMedicaController@destroy')->name('informacionmedica.destroy');
Route::get('/informacion-medica/{id}', 'InformacionMedicaController@show')->name('informacionmedica.show');

//Informacion medica
Route::get('/informacion-aliado', 'ServiciosAliadoController@index')->name('infoaliado.index');
Route::get('/informacion-aliado/create', 'ServiciosAliadoController@create')->name('infoaliado.create');
Route::post('/informacion-aliado/store', 'ServiciosAliadoController@store')->name('infoaliado.store');
Route::get('/informacion-aliado/{id}/edit', 'ServiciosAliadoController@edit')->name('infoaliado.edit');
Route::put('/informacion-aliado/{infoaliado}', 'ServiciosAliadoController@update')->name('infoaliado.update');
Route::delete('/informacion-aliado/{infoaliado}', 'ServiciosAliadoController@destroy')->name('infoaliado.destroy');
Route::get('/informacion-aliado/{id}', 'ServiciosAliadoController@show')->name('infoaliado.show');
