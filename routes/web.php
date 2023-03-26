<?php

use App\Http\Controllers\HomePageController;
use App\Http\Controllers\LeagueListController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', [HomePageController::class, 'index']);
Route::get('/me', [ProfileController::class, 'view']);
Route::prefix('leagues')->group(function () {
    Route::get('', [LeagueListController::class, 'index']);
    Route::get('new', [LeagueListController::class, 'add']);
});
