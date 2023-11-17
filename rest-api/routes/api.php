<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\NewsController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->group(function () {
// Menampilkan semua berita
Route::get('/news', [NewsController::class, 'index']);
// Menampilkan detail berita
Route::get('/news/{id}', [NewsController::class, 'show']);
// Membuat berita baru
Route::post('/news', [NewsController::class, 'store']);
// Mengupdate berita
Route::put('/news/{id}', [NewsController::class, 'update']);
// Menghapus berita
Route::delete('/news/{id}', [NewsController::class, 'destroy']);
// Search Resource by title
Route::get('/news/search/{title}', [NewsController::class, 'search']);
// Get Sport Resource
Route::get('/news/category/sport', [NewsController::class, 'sport']);
// Get Finance Resource
Route::get('/news/category/finance', [NewsController::class, 'finance']);
//Get Automitive Resource
Route::get('/news/category/automotive', [NewsController::class, 'automotive']);
});


# untuk register dan login pake auth
Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);