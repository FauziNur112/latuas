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
Route::get('/createlatuas', [latuasController::class,'create']);
Route::post('/simpanlatih', [latuasController::class,'store'])->name('simpanlatih');
