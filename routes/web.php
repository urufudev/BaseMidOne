<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\LaboralController;
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

Route::middleware('loggedin')->group(function() {
    Route::get('login', [AuthController::class, 'loginView'])->name('login-view');
    Route::post('login', [AuthController::class, 'login'])->name('login');
    Route::get('register', [AuthController::class, 'registerView'])->name('register-view');
    Route::post('register', [AuthController::class, 'register'])->name('register');
});

Route::middleware('auth')->group(function() {
    Route::get('/', [PageController::class, 'loadPage'])->name('dashboard');
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('page/{layout}/{theme}/{pageName}', [PageController::class, 'loadPage'])->name('page');



Route::get('laborals',[LaboralController::class, 'index'])->name('laborals.index');

Route::get('laborals/create', [LaboralController::class, 'create'])->name('laborals.create');
Route::post('laborals/store', [LaboralController::class, 'store'])->name('laborals.store');
Route::put('laborals/{laboral}', [LaboralController::class, 'update'])->name('laborals.update');
Route::get('laborals/{laboral}/edit', [LaboralController::class, 'edit'])->name('laborals.edit');

});




