<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\FeatureController;
use App\Http\Controllers\GridController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::get('/home', function () {
    return view('welcome');
})->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');

});

require __DIR__.'/auth.php';

// Admin Routes
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

    Route::middleware('auth:admin')->group(function () {
        Route::get('/dashboard', function () {
            return view('admin.dashboard');
        })->name('dashboard');
    });
});

// Frontend Routes
Route::get('/', [HomeController::class, 'index'])->name('front.index');
Route::get('/about', [HomeController::class, 'about'])->name('front.about');
Route::get('/service', [HomeController::class, 'service'])->name('front.service');
Route::get('/contact', [HomeController::class, 'contact'])->name('front.contact');

// BACKEND ROUTES

// -------------------- BANNER ------------------------
Route::get('/backend/banner/index', [BannerController::class, 'index'])->name('backend.banner.index');
Route::get('/backend/banner/create', [BannerController::class, 'create'])->name('backend.banner.create');
Route::post('/backend/banner/store', [BannerController::class, 'store'])->name('backend.banner.store');
Route::get('/backend/banner/edit{banner}', [BannerController::class, 'edit'])->name('backend.banner.edit');
Route::post('/backend/banner/{id}', [BannerController::class, 'update'])->name('backend.banner.update');
Route::get('/backend/banner/{banner}', [BannerController::class, 'destroy'])->name('backend.banner.destroy');

// --------------------------GRIDS---------------------
Route::get('/backend/grid/index', [GridController::class, 'index'])->name('backend.grid.index');
Route::get('/backend/grid/create', [GridController::class, 'create'])->name('backend.grid.create');
Route::post('/backend/grid/store', [GridController::class, 'store'])->name('backend.grid.store');
Route::get('/backend/grid/edit{grid}', [GridController::class, 'edit'])->name('backend.grid.edit');
Route::post('/backend/grid/{id}', [GridController::class, 'update'])->name('backend.grid.update');
Route::get('/backend/grid/{grid}', [GridController::class, 'destroy'])->name('backend.grid.destroy');

// ------------------------FEATURES-----------------------
Route::get('/backend/feature/index', [FeatureController::class, 'index'])->name('backend.feature.index');
Route::get('/backend/feature/create', [FeatureController::class, 'create'])->name('backend.feature.create');
Route::post('/backend/feature/store', [FeatureController::class, 'store'])->name('backend.feature.store');
Route::get('/backend/feature/edit{feature}', [FeatureController::class, 'edit'])->name('backend.feature.edit');
Route::post('backend/feature/{id}', [FeatureController::class, 'update'])->name('backend.feature.update');
Route::get('/backend/feature/{feature}', [FeatureController::class, 'destroy'])->name('backend.feature.destroy');

// ----------------------------SERVICES---------------------------
Route::get('/backend/service/index', [ServiceController::class, 'index'])->name('backend.service.index');
Route::get('/backend/service/create', [ServiceController::class, 'create'])->name('backend.service.create');
Route::post('backend/service/store', [ServiceController::class, 'store'])->name('backend.service.store');
Route::get('/backend/service/edit{service}', [ServiceController::class, 'edit'])->name('backend.service.edit');
Route::post('backend/service/{id}', [ServiceController::class, 'update'])->name('backend.service.update');
Route::get('/backend/service/{service}', [ServiceController::class, 'destroy'])->name('backend.service.destroy');

// ------------------------------About----------------------------
Route::get('/backend/about/index', [AboutController::class, 'index'])->name('backend.about.index');
Route::get('/backend/about/create', [AboutController::class, 'create'])->name('backend.about.create');
Route::post('/backend/about/store', [AboutController::class, 'store'])->name('backend.about.store');
Route::get('/backend/about/edit{about}', [AboutController::class, 'edit'])->name('backend.about.edit');
Route::post('/backend/about/{id}', [AboutController::class, 'update'])->name('backend.about.update');
Route::get('/backend/about/{about}', [AboutController::class, 'destroy'])->name('backend.about.destroy');