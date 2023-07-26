<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

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


Route::get('/',[Controller::class,'create'])->name('/');
Route::get('urunekle',[Controller::class,'create'])->name('urunekle');
Route::get('/update/{id}',[Controller::class,'update'])->name('update');
Route::get('/urunDuzenle/{id}',[Controller::class,'urunDuzenle'])->name('urunDuzenle');
Route::post('eklePost', [Controller::class, 'eklePost'])->name('eklePost');
Route::get('/updatePost/{id}', [Controller::class, 'updatePost'])->name('updatePost');
Route::get('urunler',[Controller::class,'urunler'])->name('urunler');
Route::get('/urunDelete/{id}', [Controller::class, 'urunDelete'])->name('urunDelete');