<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\InformationController;
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

Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::get('/form/step1', [InformationController::class, 'showStep1'])->name('form.step1');
Route::post('/form/step1', [InformationController::class, 'storeStep1']);

Route::get('/form/step2', [InformationController::class, 'showStep2'])->name('form.step2');
Route::post('/form/step2', [InformationController::class, 'storeStep2']);

Route::get('/form/result', [InformationController::class, 'showResult'])->name('form.result');



Route::get('/', function () {
    return view('welcome');
})->name('home');
