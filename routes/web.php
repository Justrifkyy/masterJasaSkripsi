<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Frontend\PageController;
use App\Http\Controllers\Frontend\PemesananController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\OrderController;

/*
|--------------------------------------------------------------------------
| RUTE FRONTEND (Publik & User)
|--------------------------------------------------------------------------
*/

// Rute Homepage
Route::get('/', [PageController::class, 'home'])->name('home');

// Rute Halaman List Semua Layanan (Publik)
Route::get('/layanan', [PageController::class, 'listServices'])->name('frontend.services.list');

// Rute Halaman Detail Layanan (Publik)
Route::get('/layanan/{service}', [PageController::class, 'showService'])->name('frontend.services.show');

// == RUTE HALAMAN STATIS BARU ==
// Halaman About Us
Route::get('/about', [PageController::class, 'about'])->name('frontend.about');
// Halaman Cara Pesan
Route::get('/how-to-order', [PageController::class, 'howToOrder'])->name('frontend.how-to-order');


/*
|--------------------------------------------------------------------------
| RUTE AUTENTIKASI (Breeze)
|--------------------------------------------------------------------------
*/

// Rute Dashboard bawaan Breeze (User yang baru login diarahkan ke sini)
Route::get('/dashboard', function () {
    // Kita arahkan saja ke Homepage agar tidak bingung
    return redirect()->route('home');
})->middleware(['auth', 'verified'])->name('dashboard');

// Rute yang hanya bisa diakses oleh user yang sudah login
Route::middleware('auth')->group(function () {
    // Rute Profile
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Rute Aksi: Buat Pesanan (Otomatis redirect ke WA)
    Route::post('/pesan-layanan/{service}', [PemesananController::class, 'buatPesanan'])
        ->name('pesan.buat');
});


/*
|--------------------------------------------------------------------------
| RUTE KHUSUS ADMIN
|--------------------------------------------------------------------------
*/

Route::group([
    'prefix' => 'admin',
    'as' => 'admin.',
    'middleware' => ['auth', 'admin'] // Dilindungi login & role admin
], function () {

    // Rute Dashboard Admin
    Route::get('/dashboard', [DashboardController::class, 'index'])
        ->name('dashboard'); // Nama rutenya: admin.dashboard

    // Rute CRUD Services
    Route::resource('services', ServiceController::class);

    // Rute CRUD Testimonials
    Route::resource('testimonials', TestimonialController::class);

    // Rute Manajemen User (Semua kecuali create & store)
    Route::resource('users', UserController::class)->except([
        'create', 'store'
    ]);

    // Rute CRUD Orders (Penuh)
    Route::resource('orders', OrderController::class);

});


// Load file rute autentikasi bawaan Breeze
require __DIR__ . '/auth.php';