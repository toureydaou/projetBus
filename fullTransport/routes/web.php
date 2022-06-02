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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('clients', 'App\Http\Controllers\ClientController@index')->name('listeClients');
Route::get('client/creer', 'App\Http\Controllers\ClientController@create')->name('creationClient');
Route::post('client/enregistrer', 'App\Http\Controllers\ClientController@store')->name('enregistrementClient');
Route::get('client', 'App\Http\Controllers\ClientController@show')->name('afficherClient');
Route::put('client/maj', 'App\Http\Controllers\ClientController@show')->name('majClient');
Route::delete('client/supprimer', 'App\Http\Controllers\ClientController@destroy')->name('suppressionClient');

Route::get('voyages', 'App\Http\Controllers\VoyageController@index')->name('listeVoyages');
Route::get('voyage/planifier', 'App\Http\Controllers\VoyageController@create')->name('planificationVoyage');
Route::post('voyage/enregistrer', 'App\Http\Controllers\VoyageController@store')->name('enregistrementVoyage');
Route::get('voyage', 'App\Http\Controllers\VoyageController@show')->name('afficherVoyage');
Route::put('voyage/maj', 'App\Http\Controllers\VoyageController@show')->name('majVoyage');
Route::delete('voyage/annuler', 'App\Http\Controllers\VoyageController@destroy')->name('annulationVoyage');


require __DIR__.'/auth.php';
