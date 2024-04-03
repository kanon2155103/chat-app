<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ChatController;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\AccountController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('chat')
->name('chat')
->controller(ChatController::class)
->group(
    function() {
        Route::middleware(['auth'])
        ->name('chat')
        ->controller(ChatController::class)
        ->group(
            function() {
                route::get('/', 'index')->name('.index');
                route::get('/create', 'create')->name('.create');
                route::post('/', 'store')->name('.store');
            }
        );

        Route::name('.login')
        ->controller(LoginController::class)
        ->group(
            function() {
                route::get('/login', 'create');
                route::post('/login', 'store')->name('.store');
            }
        );

        Route::name('.signup')
        ->controller(SignupController::class)
        ->group(
            function() {
                route::get('/signup', 'create')->name('.create');
                route::post('/signup', 'store')->name('.store');
            }
        );

        Route::name('.account')
        ->controller(AccountController::class)
        ->group(
            function() {
                route::get('user/{id}', 'index')->name('.index');
            }
        );

    }
);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
