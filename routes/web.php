<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\FamilyController;
use App\Http\Controllers\OrphansController;
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


Route::resource('families', FamilyController::class)
    ->only(['index', 'create', 'store', 'show', 'edit', 'update']);
Route::resource('login', AuthController::class)
    ->only(['create', 'store', 'destroy']);

Route::get('orphans/create/{orphansCount}/{family}', [OrphansController::class, 'create'])->name('orphans.create');
Route::post('orphans/store/{orphansCount}/{family}', [OrphansController::class, 'store'])->name('orphans.store');
