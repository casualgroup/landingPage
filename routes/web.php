<?php

use App\Http\Controllers\SeriesController;
use App\Http\Controllers\SeasonsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
  return view('landing.index');
});

Route::get('/projetos', function () {
  return view('landing.projetos');
});

//Route::resource('/series', SeriesController::class)
//  ->except(['show']);
//
//Route::get('/series/{series}/seasons', [SeasonsController::class, 'index'])
//  ->name('seasons.index');

//Route::controller(SeriesController::class)->group(function () {
//  Route::get('/series', 'index');
//  Route::get('/series/criar', 'create');
//  Route::post('/series/salvar', 'store');
//  Route::delete('/series/destroy/{id}', 'destroy')->name('series.destroy');
//});
