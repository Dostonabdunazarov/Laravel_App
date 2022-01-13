<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AutoController;
use App\Http\Controllers\TechSuppController;
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

    Route::get('/techSupport', [TechSuppController::class, 'techSupports'])->name('techSupports');
    Route::get('/techs/create', [TechSuppController::class, 'techCreate' ])->name('techCreate');
    Route::post('/techs', [TechSuppController::class, 'techStore']);
    Route::get('/techs/{tech}', [TechSuppController::class, 'techShow'])->name('techShow');
    Route::get('/techs/{tech}/edit', [TechSuppController::class, 'techEdit'])->name('techEdit');
    Route::patch('/techs/{tech}', [TechSuppController::class, 'techUpdate'])->name('tech_update');
    Route::delete('/techs/{tech}', [TechSuppController::class, 'techDestroy']);
});

require __DIR__.'/auth.php';
