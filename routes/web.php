<?php

use App\Http\Controllers\CastomarController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TripController;
use App\Http\Controllers\LocationController;

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

// Locations
Route::get('/locations', [LocationController::class, 'index']);
Route::get('/locations/create', [LocationController::class, 'create']);
Route::post('/locations', [LocationController::class, 'store']);
Route::get('/locations/{id}/edit', [LocationController::class, 'edit']);
Route::put('/locations/{id}', [LocationController::class, 'update']);
Route::delete('/locations/{id}', [LocationController::class, 'destroy']);

// Trips
Route::get('/trips', [TripController::class, 'index']);
Route::get('/trips/create', [TripController::class, 'create']);
Route::post('/trips', [TripController::class, 'store']);
Route::get('/trips/{id}/edit', [TripController::class, 'edit']);
Route::put('/trips/{id}', [TripController::class, 'update']);
Route::delete('/trips/{id}', [TripController::class, 'destroy']);

// Customers
Route::get('/customers', [CastomarController::class, 'index']);
Route::get('/customers/create', [CastomarController::class, 'create']);
Route::post('/customers', [CastomarController::class, 'store']);
Route::get('/customers/{id}/edit', [CastomarController::class, 'edit']);
Route::put('/customers/{id}', [CastomarController::class, 'update']);
Route::delete('/customers/{id}', [CastomarController::class, 'destroy']);