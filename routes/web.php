<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NamadosenController;

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

Route::get('/namadosen',[NamadosenController::class, 'index'])->name('namadosen');

Route::get('/tambahdosen',[NamadosenController::class, 'tambahdosen'])->name('tambahdosen');
Route::post('/insertdata',[NamadosenController::class, 'insertdata'])->name('insertdata');

Route::get('/tampilkandata/{id}',[NamadosenController::class, 'tampilkandata'])->name('tampilkandata');
Route::post('/updatedata/{id}',[NamadosenController::class, 'updatedata'])->name('updatedata');

Route::get('/delete/{id}',[NamadosenController::class, 'delete'])->name('delete');