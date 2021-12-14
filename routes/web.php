<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AutoController;
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


Route::middleware('auth')->group(function () {
    Route::get('/', [AutoController::class, 'index' ])->name('autos');
    Route::get('/autos/create', [AutoController::class, 'create' ])->name('create');
    Route::post('/autos', [AutoController::class, 'store' ]);
    Route::get('autos/{auto}', [AutoController::class, 'show' ])->name('show');
    Route::get('/autos/{auto}/edit', [AutoController::class, 'edit' ])->name('edit');
    Route::patch('/autos/{auto}', [AutoController::class, 'update' ])->name('auto_update');
    Route::delete('/autos/{auto}', [AutoController::class, 'destroy' ]);
    Route::get('/about', [AutoController::class, 'about' ])->name('about');

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

require __DIR__.'/auth.php';
