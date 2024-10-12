<?php


use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});



Route::get('/hello', function() {
    echo 'hello';
});

// php artisan make:controller WelcomeController --invokable
use App\Http\Controllers\WelcomeController;

Route::get('/welcome', WelcomeController::class);

Route::get('/welcome2', function () {
    return view('welcome-too');
});
