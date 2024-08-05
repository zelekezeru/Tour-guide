<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TourController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use App\Livewire\SweetAlertNotification;

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

// FOR THE HOME PAGE
Route::get('/', [HomeController::class, 'index'])->name('home');

<<<<<<< Updated upstream
Route::post('/contacts/send', [ContactController::class, 'send'])->name('contacts.send');
=======
// FOR SENDING EMAIL
route::post('contacts/send', [ContactController::class, 'send'])->name('contacts.send');

>>>>>>> Stashed changes
// FOR RESOURCE ROUTES
Route::resource('abouts', AboutController::class);

Route::resource('blogs', BlogController::class);

Route::resource('contacts', ContactController::class);

Route::resource('homes', HomeController::class)->except('index');

Route::resource('hotels', HotelController::class);

Route::resource('tours', TourController::class);

Route::get('allert', SweetAlertNotification::class);
