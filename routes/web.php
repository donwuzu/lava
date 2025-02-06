<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\UserController;


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

Route::get('/', [HomeController::class, 'home'])->name('home'); ;

Route::get('/about', [HomeController::class, 'about'])->name('about'); ;

Route::get('/contact', [HomeController::class, 'contact'])->name('contact'); ;


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::middleware(['auth'])->group(function () {
    
    Route::get('/career-form', [UserController::class, 'showForm'])->name('career.form');
    Route::post('/career-form', [UserController::class, 'storeCareerInfo'])->name('career.store');
});



Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('admin/dashboard', [AdminController::class, 'index'])->name('admin.index');
    Route::get('admin/docs', [AdminController::class, 'docs'])->name('admin.docs');
    Route::get('admin/', [AdminController::class, 'home'])->name('admin.home');
    Route::get('admin/reports', [AdminController::class, 'reports'])->name('admin.reports');
});





require __DIR__.'/auth.php';
