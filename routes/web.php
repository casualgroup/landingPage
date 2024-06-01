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

Route::get('/faq', function () {
  return view('landing.faq');
});

Route::get('/contato', function () {
  return view('landing.contato');
});


