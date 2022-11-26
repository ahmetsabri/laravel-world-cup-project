<?php

use App\Http\Controllers\WorldCupController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [WorldCupController::class, 'index']);
Route::get('update-team/{team:name}', [WorldCupController::class,'edit']);
Route::post('update-team/{team}', [WorldCupController::class, 'update'])->name('team.update');
