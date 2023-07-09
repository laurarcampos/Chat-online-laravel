<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\NoticiasController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\VerifyEmailController;
use App\Http\Controllers\HomeController;


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

Route::get('/', [HomeController::class, 'checkUserType']);

Route::get('/noticias', [NoticiasController::class, 'index']);
Route::get('/noticias/create', [NoticiasController::class, 'create']);
Route::post('/noticias', [NoticiasController::class, 'store']);
Route::get('/noticias/{id}', [NoticiasController::class, 'show']);
Route::get('/noticias/{id}/edit', [NoticiasController::class, 'edit']);
Route::delete('/noticias/{id}', [NoticiasController::class, 'destroy']);
Route::put('/noticias/{id}', [NoticiasController::class, 'update']);

Route::get('/register', [RegisteredUserController::class, 'create'])->middleware('guest')->name('register');
Route::post('/register', [RegisteredUserController::class, 'store'])->middleware('guest');

Route::get('/login', [AuthenticatedSessionController::class, 'create'])->middleware('guest')->name('login');
Route::post('/login', [AuthenticatedSessionController::class, 'store'])->middleware('guest');

Route::get('adm/dashboard', function(){
    return view('adm-dashboard');
})->name('adm.dashboard');

Route::get('user/dashboard', function(){
    return view('welcome');
})->name('user.dashboard');

Route::get('assistent/dashboard', function(){
    return view('assistent.dashboard');
})->name('assistent.dashboard');

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
