<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Admin\ProjetController;
use App\Http\Controllers\Admin\CompetenceController;
use App\Http\Controllers\Admin\ExperienceController;

Route::get('/', [PortfolioController::class, 'index'])->name('home');
Route::get('/projets', [PortfolioController::class, 'projets'])->name('projets');
Route::get('/competences', [PortfolioController::class, 'competences'])->name('competences');
Route::get('/experiences', [PortfolioController::class, 'experiences'])->name('experiences');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', function () { return redirect()->route('admin.projets.index'); });
    Route::resource('projets', ProjetController::class);
    Route::resource('competences', CompetenceController::class);
    Route::resource('experiences', ExperienceController::class);
});
Route::get('/cv/cv.pdf', function () {
    $path = public_path('cv/cv.pdf');
    if (!file_exists($path)) {
        return "Fichier introuvable : " . $path;
    }
    return response()->download($path, 'Mon_CV.pdf');
})->name('cv.download');
