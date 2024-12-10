<?php

use App\Http\Controllers\KhoaController;
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
    return view('welcome');
});
#Khoa
Route::get('/khoa',[KhoaController::class,'index'])->name('Khoa.index');
Route::get('/khoa/detail/{makh}',[KhoaController::class,'nvkGetKhoa'])->name('khoa.detail');
Route::get('/khoa/edit/{makh}',[KhoaController::class,'nvkedit'])->name('khoa.edit');
Route::post('/khoa/edit',[KhoaController::class,'nvkEditsubmitl'])->name('khoa.nvkEditsubmitl');
Route::get('/khoa/create',[KhoaController::class,'create'])->name('khoa.create');
Route::post('/khoa/create',[KhoaController::class,'createSubmit'])->name('khoa.createSubmit');
Route::get('/khoa/delete/{makh}',[KhoaController::class,'delete'])->name('khoa.delete');
