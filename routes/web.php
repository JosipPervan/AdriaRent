<?php

use App\Http\Controllers\Frontend\WelcomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;



Route::get('/', [\App\Http\Controllers\Frontend\WelcomeController::class, 'index']);
Route::get('categories', [App\Http\Controllers\Frontend\CategoryController::class,'index'])->name('categories.index');
Route::get('categories/{category}', [App\Http\Controllers\Frontend\CategoryController::class,'show'])->name('categories.show');
Route::get('equipments', [App\Http\Controllers\Frontend\EquipmentController::class,'index'])->name('equipments.index');
Route::get('offers', [App\Http\Controllers\Frontend\OfferController::class,'index'])->name('offers.index');






Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/reservations', [App\Http\Controllers\Frontend\ReservationController::class, 'index'])->name('reservations.index');
    Route::post('/reservations', [App\Http\Controllers\Frontend\ReservationController::class, 'store'])->name('reservations.store.index');
    Route::get('/thankyou', [WelcomeController::class, 'thankyou'])->name('thankyou');
});

Route::middleware(['auth', 'admin'])->name('admin.')->prefix('admin')->group(function(){
    Route::get('/', [\App\Http\Controllers\Admin\AdminController::class, 'index'])->name('index');
    Route::resource('/categories', \App\Http\Controllers\Admin\CategoryController::class);
    Route::resource('/equipments', \App\Http\Controllers\Admin\EquipmentController::class);
    Route::resource('/offers', \App\Http\Controllers\Admin\OfferController::class);
    Route::resource('/reservations', \App\Http\Controllers\Admin\ReservationController::class);


});

require __DIR__.'/auth.php';
URL::forceRootUrl('http://studenti.sum.ba/projekti/rwa/2023/g04');
