<?php

use Illuminate\Support\Facades\Route;
use App\Interfaces\Http\Controllers\AuthFormController;

Route::get('/', function () {
    return view('welcome');
});



require __DIR__ . '/../app/Interfaces/Http/Routes/web.php';




Route::get('/login', [AuthFormController::class, 'showLoginForm'])->name('login');
Route::get('/register', [AuthFormController::class, 'showRegisterForm'])->name('register');
Route::get('/logout', [AuthFormController::class, 'logout'])->name('logout');
Route::post('/web-login', [AuthFormController::class, 'login'])->name('web.login');
Route::post('/web-register', [AuthFormController::class, 'register'])->name('web.register');