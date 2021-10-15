<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RubrikaController;
use App\Http\Controllers\StraipsnisController;

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
    return view('home');
})->name("home");

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::resource('rubrika', RubrikaController::class);

Route::resource('straipsnis', StraipsnisController::class);

Route::get('/{rubrika:nuoroda}', [RubrikaController::class, 'straipsniai'])->name("rubrika");
