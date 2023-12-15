<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PesawatController;

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
    return view('welcome');
});

Route::get('/pesawat', [PesawatController::class,'index'])->name('pesawat');
Route::get('/tambahdata', [PesawatController::class,'tambahdata'])->name('tambahdata');
Route::post('/insertdata', [PesawatController::class,'insertdata'])->name('insertdata');

Route::get('/tampilkandata/{id}', [PesawatController::class,'tampilkandata'])->name('tampilkandata');
Route::post('/updatedata/{id}', [PesawatController::class,'updatedata'])->name('updatedata');

Route::get('/delete/{id}', [PesawatController::class,'delete'])->name('delete');


