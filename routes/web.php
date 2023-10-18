<?php


use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\UserController;
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
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function(){
    Route::get('/redirect',[App\Http\Controllers\HomeController::class,'index']);
});
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth','IsUser'])->group(function(){
    Route::get('/reservations',[App\Http\Controllers\ReservationController::class,'Reservations'])->name('reservations.user');
    Route::get('/createReservations/{id}',[App\Http\Controllers\ReservationController::class,'createreservation']);
    Route::post('/placeReservation/{id}', 'ReservationController@placeReservation');
    // Route::get('/my-reservations/{id}',[App\Http\Controllers\ReservationController::class,'viewReservations'])->name('view.reservations');
    route::get('/success',[App\Http\Controllers\ReservationController::class,'successReservation'])->name('success');
});
Route::middleware(['auth','IsAdmin'])->group(function(){
    Route::resource('/rooms', RoomController::class);
    Route::resource('/users', UserController::class);
    Route::get('/reservation-admin', [ReservationController::class,'index'])->name('admin.reservations');
});
require __DIR__.'/auth.php';
