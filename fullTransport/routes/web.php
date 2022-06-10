<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('clients', [App\Http\Controllers\ClientController::class, 'index'])->name('listeClients');
Route::get('client/creer', [App\Http\Controllers\ClientController::class, 'create'])->name('creationClient');
Route::post('client/enregistrer', [App\Http\Controllers\ClientController::class, 'store'])->name('enregistrementClient');
Route::get('client/{client}', [App\Http\Controllers\ClientController::class, 'show'])->name('afficherClient');
Route::get('client/{client}/editer', [App\Http\Controllers\ClientController::class, 'edit'])->name('editerClient');
Route::post('client/{client}/MAJ', [App\Http\Controllers\ClientController::class, 'update'])->name('majClient');
Route::post('client/{client}/supprimer', [App\Http\Controllers\ClientController::class, 'destroy'])->name('suppressionClient');

Route::get('voyages', [App\Http\Controllers\VoyageController::class, 'index'])->name('listeVoyages');
Route::get('voyage/planifier', [App\Http\Controllers\VoyageController::class, 'create'])->name('planificationVoyage');
Route::post('voyage/enregistrer', [App\Http\Controllers\VoyageController::class, 'store'])->name('enregistrementVoyage');
Route::get('voyage/{voyage}', [App\Http\Controllers\VoyageController::class, 'show'])->name('afficherVoyage');
Route::get('voyage/{voyage}/editer', [App\Http\Controllers\VoyageController::class, 'edit'])->name('editerVoyage');
Route::post('voyage/{voyage}/maj', [App\Http\Controllers\VoyageController::class, 'update'])->name('majVoyage');
Route::post('voyage/{voyage}/supprimer', [App\Http\Controllers\VoyageController::class, 'destroy'])->name('annulationVoyage');

Route::get('vehicule', [App\Http\Controllers\VehiculeController::class, 'index'])->name('listeVehicules');
Route::get('vehicule/planifier', [App\Http\Controllers\VehiculeController::class, 'create'])->name('planificationVehicule');
Route::post('vehicule/enregistrer', [App\Http\Controllers\VehiculeController::class, 'store'])->name('enregistrementBus');
Route::get('vehicule/{vehicule}', [App\Http\Controllers\VehiculeController::class, 'show'])->name('afficherBus');
Route::get('vehicule/{vehicule}/editer', [App\Http\Controllers\VehiculeController::class, 'edit'])->name('editerBus');
Route::post('vehicule/{vehicule}/maj', [App\Http\Controllers\VehiculeController::class, 'update'])->name('majBus');
Route::post('vehicule/{vehicule}/supprimer', [App\Http\Controllers\VehiculeController::class, 'destroy'])->name('annulationBus');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
