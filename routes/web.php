<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TourController;
use App\Http\Controllers\TravelController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ItenararyController;
use App\Http\Controllers\LocationController;
use App\Http\Middleware\RoleMiddleware;
use App\Livewire\SweetAlertNotification;

Route::get('/dashboard', [AdminController::class, 'index'])->middleware(['auth', 'verified'])->name('admin.dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

// FOR THE HOME PAGE
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::post('/contacts/send', [ContactController::class, 'send'])->name('contacts.send');

// FOR SENDING EMAIL
route::post('contacts/send', [ContactController::class, 'send'])->name('contacts.send');

//Hotel
Route::get('/hotels/list', [HotelController::class, 'list'])->name('hotels.list');

Route::get('/hotels/search', [HotelController::class, 'search'])->name('hotels.search');

Route::get('/hotels/detail/{hotel}', [HotelController::class, 'detail'])->name('hotels.detail');

// Add this route for deleting hotel images
Route::delete('/hotels/images/{image}', [ImageController::class, 'destroy'])->name('hotels.images.destroy');

//Blog
Route::get('/blogs/list', [BlogController::class, 'list'])->name('blogs.list');

Route::get('/blogs/detail/{blog}', [BlogController::class, 'detail'])->name('blogs.detail');
//Tour
Route::get('/tours/list', [TourController::class, 'list'])->name('tours.list');

Route::get('/tours/search', [TourController::class, 'search'])->name('tours.search');

Route::get('/tours/detail/{tour}', [TourController::class, 'detail'])->name('tours.detail');

//Travel
Route::get('/travels/list', [TravelController::class, 'list'])->name('travels.list');

Route::get('/travels/search', [TravelController::class, 'search'])->name('travels.search');

//User
Route::get('/users/list', [UserController::class, 'list'])->name('users.list');

Route::get('/users/search', [UserController::class, 'search'])->name('users.search');

Route::get('/users/detail/{user}', [UserController::class, 'detail'])->name('users.detail');

//Contact
Route::get('/contacts/list', [ContactController::class, 'list'])->name('contacts.list');

Route::get('/contacts/detail/{contact}', [ContactController::class, 'detail'])->name('contacts.detail');

//Testimonial
Route::get('/testimonials/list', [TestimonialController::class, 'list'])->name('testimonials.list');

Route::get('/testimonials/detail/{testimonial}', [TestimonialController::class, 'detail'])->name('testimonials.detail');

//Images to Contents
Route::get('/image/hotel/{id}', [ImageController::class, 'hotel'])->name('images.hotel');

Route::post('/hotels/image', [ImageController::class, 'hotel_image'])->name('hotels.image');

//Images to Tour
Route::get('/image/tour/{id}', [ImageController::class, 'tour'])->name('images.tour');

Route::post('/tours/image', [ImageController::class, 'tour_image'])->name('tours.image');

//Images to Travel
Route::get('/image/travel/{id}', [ImageController::class, 'travel'])->name('images.travel');

Route::post('/travels/image', [ImageController::class, 'travel_image'])->name('travels.image');

//Itenarary routes
Route::get('itenararies/{tour}/edit', [ItenararyController::class, 'edit'])->name('itenararies.edit');

Route::patch('itenararies/{itenarary}', [ItenararyController::class, 'update'])->name('itenararies.update');

Route::delete('itenararies/{itenarary}', [ItenararyController::class, 'destroy'])->name('itenararies.destroy');

//blog images uploader
Route::post('/upload-blog-images', [BlogController::class, 'upload'])->name('ckeditor.blog.upload');

// FOR RESOURCE ROUTES
Route::resource('abouts', AboutController::class);

Route::resource('blogs', BlogController::class);

Route::resource('contacts', ContactController::class);

Route::resource('homes', HomeController::class)->except('index');

Route::resource('hotels', HotelController::class);

Route::resource('bookings', BookingController::class);

Route::resource('tours', TourController::class);

Route::resource('travels', TravelController::class);

Route::resource('testimonials', TestimonialController::class);

Route::get('alert', SweetAlertNotification::class);

Route::resource('admins', AdminController::class);

Route::resource('users', UserController::class);

Route::resource('image', ImageController::class);

