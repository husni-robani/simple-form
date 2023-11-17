<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

Route::get('/', function () {
    return Inertia::render('Welcome');
})->name('welcomePage');


Route::get('/form', [\App\Http\Controllers\CitizenController::class, 'index'])->name('form');
Route::post('/form', [\App\Http\Controllers\CitizenController::class, 'store']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/citizens/export', [\App\Http\Controllers\CitizenController::class, 'export'])->name('citizens.export');
    Route::get('/citizens', function () {
        return Inertia::render('Dashboard', [
            'citizens' => \App\Models\Citizen::all()
        ]);
    })->name('dashboard');
    Route::delete('/citizens/{nik}', [\App\Http\Controllers\CitizenController::class, 'destroy'])->name('citizen.destroy');
});

require __DIR__.'/auth.php';
