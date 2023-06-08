<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\latuasController;

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
    return view('home');
});

// Route::get('/latuas', function () {
//     return view('latih');
// });

Route::get('/latuas', [latuasController::class,'show'])->name('latuas');
Route::get('/createlatuas', [latuasController::class,'create'])->name('create');
Route::post('/simpanlatih', [latuasController::class,'store'])->name('simpanlatih');
Route::get('/editlatih/{id}', [latuasController::class,'edit'])->name('edit');
Route::post('/update/{id}', [latuasController::class,'update'])->name('update');
Route::get('/delete/{id}', [latuasController::class,'destroy'])->name('delete');
