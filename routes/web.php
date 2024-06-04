<?php

use App\Http\Controllers\MailController;
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
})->name('landing.index');

Route::get('/projetos', function () {
  return view('landing.projetos');
})->name('landing.projetos');

Route::get('/faq', function () {
  return view('landing.faq');
})->name('landing.faq');

Route::get('/contato', function () {
  return view('landing.contato');
})->name('landing.contato');

Route::get('/tecnologias', function() {
  return view('landing.tecnologias');
})->name('landing.tecnologias');

Route::get('/equipe', function() {
  return view('landing.equipe');
})->name('landing.equipe');

Route::resource('/mail', MailController::class)->only(['store']);
