<?php

use App\Http\Controllers\EventosCulturales;
use App\Http\Controllers\ProfileController;
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

// Route::get('/', function () {
//     return view('welcome');
//     Route::get('/', [EventosCulturales::class, 'index'])->name('welcome');
// });

Route::get('/', [EventosCulturales::class, 'getEventos']);

Route::get('/eventos/{id}', [EventosCulturales::class, 'getEventById']);

Route::get('/api/evento/{id}', [EventosCulturales::class, 'getEventByIdApi']);

Route::get('/api/events/{pages}', [EventosCulturales::class, 'getEventsByPaginationApi']);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
