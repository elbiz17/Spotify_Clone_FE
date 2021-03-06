<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SpotifyController;
use App\Http\Controllers\LoginSpotifyController;
use App\Http\Controllers\RegisterSpotifyController;



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

Route::get('/', [SpotifyController::class, 'index']);

Route::get('/login', [LoginSpotifyController::class, 'index']);

Route::get('/register', [RegisterSpotifyController::class, 'index']);

Route::get('/create', [SpotifyController::class, 'create']);
