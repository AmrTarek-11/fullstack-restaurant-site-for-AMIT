<?php

use App\Http\Controllers\Admin\AdminbookingController;
use App\Http\Controllers\Admin\AdminmenuitemController;
use App\Http\Controllers\Admin\AdminuserController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| User Routes
|--------------------------------------------------------------------------
*/

// ✅ Dashboard for normal users
Route::get('/dashboard', function () {
    return view('dashboard'); // resources/views/dashboard.blade.php
})->middleware(['auth', 'verified'])->name('dashboard');

// ✅ Routes only for logged-in users
Route::middleware('auth')->group(function () {
    // Profile
Route::get('/profile', [ProfileController::class, 'index'])->name('profile');

    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Booking (User side)
    Route::get('/booking', [BookingController::class, 'index'])->name('booking.index'); // My Bookings
    Route::get('/booking/create', [BookingController::class, 'create'])->name('booking.create');
    Route::post('/booking', [BookingController::class, 'store'])->name('booking.store');
});

// ✅ Public menu route
Route::get('/menu', [MenuController::class, 'index'])->name('menu.index');

// ✅ Public static pages
Route::get('/', function () {
    return view('homepage.homepage');
});
Route::get('/about', function () {
    return view('aboutpage.aboutpage');
});
Route::get('/booktable', function () {
    return view('booking.booktable');
});
Route::get('/pages', function () {
    return view('pages');
});


/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(function () {
    // ✅ Admin Dashboard (Admin Panel with 3 buttons)
    Route::get('/adminpanel', function () {
        return view('admin.adminpanel'); // resources/views/admin/adminpanel.blade.php
    })->name('admin.adminpanel');

    // ✅ Manage Users
    Route::get('/users', [AdminuserController::class, 'index'])->name('admin.users');

    // ✅ Manage Bookings
    Route::get('/booking', [AdminbookingController::class, 'index'])->name('admin.booking');
    Route::put('/booking/{booking}', [AdminbookingController::class, 'update'])->name('admin.booking.update');
    Route::delete('/booking/{booking}', [AdminbookingController::class, 'destroy'])->name('admin.booking.destroy');

    // ✅ Manage Menu Items
    Route::get('/menuitem', [AdminmenuitemController::class, 'index'])->name('admin.menuitem.index');
    Route::get('/menuitem/create', [AdminmenuitemController::class, 'create'])->name('admin.menuitem.create');
    Route::post('/menuitem', [AdminmenuitemController::class, 'store'])->name('admin.menuitem.store');
    Route::get('/menuitem/{menu}/edit', [AdminmenuitemController::class, 'edit'])->name('admin.menuitem.edit');
    Route::put('/menuitem/{menu}', [AdminmenuitemController::class, 'update'])->name('admin.menuitem.update');
    Route::delete('/menuitem/{menu}', [AdminmenuitemController::class, 'destroy'])->name('admin.menuitem.destroy');
});

require __DIR__ . '/auth.php';
