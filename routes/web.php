<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SpotifyController;
use App\Http\Controllers\LoginSpotifyController;
use App\Http\Controllers\RegisterSpotifyController;
use App\Http\Controllers\DashboardSpotifyController;



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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [SpotifyController::class, 'index'])->name('home');

Route::get('/login', [LoginSpotifyController::class, 'index'])->middleware('guest');  
Route::post('/login', [LoginSpotifyController::class, 'authenticate']);
Route::post('/logout', [LoginSpotifyController::class, 'logout']);  

Route::get('/register', [RegisterSpotifyController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterSpotifyController::class, 'store']);

Route::get('/dashboard', [DashboardSpotifyController::class, 'index'])->middleware('auth');

// Route::get('/create', [SpotifyController::class, 'create']);
