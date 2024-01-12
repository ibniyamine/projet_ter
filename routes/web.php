<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HoraireController;
use App\Http\Controllers\ReservationController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Route::get('/horaire', function () {
//     return view('horaire');
// })->middleware(['auth', 'verified'])->name('horaire');


Route::get('/horaire', [HoraireController::class, 'index'])->middleware(['auth', 'verified'])->name('horaire');
Route::get('/reservation', [ReservationController::class, 'index'])->middleware(['auth', 'verified'])->name('reservation');
Route::get('/createReservation', [ReservationController::class, 'create'])->middleware(['auth', 'verified'])->name('create');
Route::post('/storeReservation', [ReservationController::class, 'store'])->middleware(['auth', 'verified'])->name('store');
Route::get('/showQr/{id}', [ReservationController::class, 'show'])->middleware(['auth', 'verified'])->name('showQr');
Route::get('/delete/{id}', [ReservationController::class, 'delete'])->middleware(['auth', 'verified'])->name('delete');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
