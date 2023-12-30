<?php

use App\Http\Controllers\KosanController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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

Route::get('/', [AuthController::class, 'index']);
Route::post('/', [AuthController::class, 'login']);
Route::get('/beranda', [AuthController::class, 'beranda']);
Route::get('/index', [AuthController::class, 'indek']);
Route::get('/detailkos/{name}', [AuthController::class, 'detailkos']);
Route::get('/daftarkosku', [AuthController::class, 'daftarkosku']);
Route::get('/register', [AuthController::class, 'registration']);
Route::post('/register', [AuthController::class, 'register']);
Route::get('/tambahkos', [AuthController::class, 'tambahkos']);
Route::get('/logout', [AuthController::class, 'logout']);
Route::get('/hasilcariberanda', [AuthController::class, 'hasilcariberanda']);
Route::post('/tambahkos', [KosanController::class, 'tambahkos']);
