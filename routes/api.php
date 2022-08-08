<?php

use App\Http\Controllers\API\DaerahController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::get('provinces', [DaerahController::class, 'provinces'])->name('provinces');
Route::get('cities', [DaerahController::class, 'cities'])->name('cities');
Route::get('districts', [DaerahController::class, 'districts'])->name('districts');
Route::get('villages', [DaerahController::class, 'villages'])->name('villages');
