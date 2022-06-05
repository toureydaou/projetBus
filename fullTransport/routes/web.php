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

Route::get('clients', 'App\Http\Controllers\ClientController@index')->name('listeClients');
Route::get('client/creer', 'App\Http\Controllers\ClientController@create')->name('creationClient');
Route::post('client/enregistrer', 'App\Http\Controllers\ClientController@store')->name('enregistrementClient');
Route::get('client/{client}', 'App\Http\Controllers\ClientController@show')->name('afficherClient');
Route::get('client/{client}/editer', 'App\Http\Controllers\ClientController@edit')->name('editerClient');
Route::post('client/{client}/MAJ', 'App\Http\Controllers\ClientController@update')->name('majClient');
Route::post('client/{client}/supprimer', 'App\Http\Controllers\ClientController@destroy')->name('suppressionClient');

Route::get('voyages', 'App\Http\Controllers\VoyageController@index')->name('listeVoyages');
Route::get('voyage/planifier', 'App\Http\Controllers\VoyageController@create')->name('planificationVoyage');
Route::post('voyage/enregistrer', 'App\Http\Controllers\VoyageController@store')->name('enregistrementVoyage');
Route::get('voyage/{voyage}', 'App\Http\Controllers\VoyageController@show')->name('afficherVoyage');
Route::get('voyage/{voyage}/editer', 'App\Http\Controllers\VoyageController@edit')->name('editerVoyage');
Route::post('voyage/{voyage}/maj', 'App\Http\Controllers\VoyageController@update')->name('majVoyage');
Route::post('voyage/{voyage}/supprimer', 'App\Http\Controllers\VoyageController@destroy')->name('annulationVoyage');

Route::get('bus', 'App\Http\Controllers\BusController@index')->name('listeBus');
Route::get('bus/planifier', 'App\Http\Controllers\BusController@create')->name('planificationBus');
Route::post('bus/enregistrer', 'App\Http\Controllers\BusController@store')->name('enregistrementBus');
Route::get('bus/{bus}', 'App\Http\Controllers\BusController@show')->name('afficherBus');
Route::get('bus/{bus}/editer', 'App\Http\Controllers\BusController@edit')->name('editerBus');
Route::post('bus/{bus}/maj', 'App\Http\Controllers\BusController@update')->name('majBus');
Route::post('bus/{bus}/supprimer', 'App\Http\Controllers\BusController@destroy')->name('annulationBus');
