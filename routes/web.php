<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Admin\ProjetController;
use App\Http\Controllers\Admin\CompetenceController;
use App\Http\Controllers\Admin\ExperienceController;
use App\Http\Controllers\Admin\ContactController as AdminContactController;
use App\Http\Controllers\Admin\LoginController;

// Routes portfolio
Route::get('/', [PortfolioController::class, 'index'])->name('home');
Route::get('/projets', [PortfolioController::class, 'projets'])->name('projets');
Route::get('/competences', [PortfolioController::class, 'competences'])->name('competences');
Route::get('/experiences', [PortfolioController::class, 'experiences'])->name('experiences');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
Route::get('/cv', [PortfolioController::class, 'downloadCV'])->name('cv.download');

// Routes admin login
Route::get('admin/login', [LoginController::class, 'index'])->name('admin.login');
Route::post('admin/login', [LoginController::class, 'login'])->name('admin.login.post');
Route::post('admin/logout', [LoginController::class, 'logout'])->name('admin.logout');

// Routes admin protégées
Route::prefix('admin')->name('admin.')->middleware('auth')->group(function () {
    Route::get('/', function () { return redirect()->route('admin.projets.index'); });
    Route::resource('projets', ProjetController::class);
    Route::resource('competences', CompetenceController::class);
    Route::resource('experiences', ExperienceController::class);
    Route::get('contacts', [AdminContactController::class, 'index'])->name('contacts.index');
    Route::delete('contacts/{contact}', [AdminContactController::class, 'destroy'])->name('contacts.destroy');
});
