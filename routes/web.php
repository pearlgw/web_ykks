<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\LiteracyCornerController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\StaffController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomepageController::class, 'index']);

Route::get('/about', function () {
    return view('about.index');
});

Route::get('/program-project', [HomepageController::class, 'programProject']);
Route::get('/program-project/{id}', [HomepageController::class, 'detailProgram'])->name('detail.program');
Route::get('/detail-project/{id}', [HomepageController::class, 'detailProject'])->name('detail.project');
Route::get('/detail-news/{id}', [HomepageController::class, 'detailNews'])->name('detail.news');
Route::get('/all-news', [HomepageController::class, 'allNews'])->name('all.news');

Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
Route::post('/ckeditor/upload', [ProjectController::class, 'uploadImage'])->name('ckeditor.upload');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/contact', [ContactController::class, 'index'])
        ->name('contact.index')
        ->middleware('role:admin');

    // Route::get('/content', [ContentController::class, 'index'])->name('content.index');
    // Route::get('/content/create', [ContentController::class, 'create'])->name('content.create');
    // Route::post('/content', [ContentController::class, 'store'])->name('content.store');
    // Route::put('/content/{id}', [ContentController::class, 'update'])->name('content.update');
    // Route::get('/content/{id}', [ContentController::class, 'show'])->name('content.show');
    // Route::get('/content/{id}/edit', [ContentController::class, 'edit'])->name('content.edit');
    // Route::delete('/content/{id}', [ContentController::class, 'destroy'])->name('content.destroy');

    Route::get('/project', [ProjectController::class, 'index'])->name('project.index');
    Route::get('/project/create', [ProjectController::class, 'create'])->name('project.create');
    Route::post('/project', [ProjectController::class, 'store'])->name('project.store');
    Route::put('/project/{id}', [ProjectController::class, 'update'])->name('project.update');
    Route::get('/project/{id}', [ProjectController::class, 'show'])->name('project.show');
    Route::get('/project/{id}/edit', [ProjectController::class, 'edit'])->name('project.edit');
    Route::delete('/project/{id}', [ProjectController::class, 'destroy'])->name('project.destroy');

    Route::middleware('role:admin')->group(function () {
        Route::get('/staff', [StaffController::class, 'index'])->name('staff.index');
        Route::get('/staff/create', [StaffController::class, 'create'])->name('staff.create');
        Route::post('/staff', [StaffController::class, 'store'])->name('staff.store');
        Route::put('/staff/{id}', [StaffController::class, 'update'])->name('staff.update');
        Route::get('/staff/{id}', [StaffController::class, 'show'])->name('staff.show');
        Route::get('/staff/{id}/edit', [StaffController::class, 'edit'])->name('staff.edit');
        Route::delete('/staff/{id}', [StaffController::class, 'destroy'])->name('staff.destroy');

        Route::get('/program', [ProgramController::class, 'index'])->name('program.index');
        Route::get('/program/create', [ProgramController::class, 'create'])->name('program.create');
        Route::post('/program', [ProgramController::class, 'store'])->name('program.store');
        Route::put('/program/{id}', [ProgramController::class, 'update'])->name('program.update');
        Route::get('/program/{id}', [ProgramController::class, 'show'])->name('program.show');
        Route::get('/program/{id}/edit', [ProgramController::class, 'edit'])->name('program.edit');
        Route::delete('/program/{id}', [ProgramController::class, 'destroy'])->name('program.destroy');

        Route::get('/news', [NewsController::class, 'index'])->name('news.index');
        Route::get('/news/create', [NewsController::class, 'create'])->name('news.create');
        Route::post('/news', [NewsController::class, 'store'])->name('news.store');
        Route::put('/news/{id}', [NewsController::class, 'update'])->name('news.update');
        Route::get('/news/{id}', [NewsController::class, 'show'])->name('news.show');
        Route::get('/news/{id}/edit', [NewsController::class, 'edit'])->name('news.edit');
        Route::delete('/news/{id}', [NewsController::class, 'destroy'])->name('news.destroy');

        Route::get('/literacy-corner', [LiteracyCornerController::class, 'index'])->name('literacy-corner.index');
        Route::get('/literacy-corner/create', [LiteracyCornerController::class, 'create'])->name('literacy-corner.create');
        Route::post('/literacy-corner', [LiteracyCornerController::class, 'store'])->name('literacy-corner.store');
        Route::put('/literacy-corner/{id}', [LiteracyCornerController::class, 'update'])->name('literacy-corner.update');
        Route::get('/literacy-corner/{id}', [LiteracyCornerController::class, 'show'])->name('literacy-corner.show');
        Route::get('/literacy-corner/{id}/edit', [LiteracyCornerController::class, 'edit'])->name('literacy-corner.edit');
        Route::delete('/literacy-corner/{id}', [LiteracyCornerController::class, 'destroy'])->name('literacy-corner.destroy');

    });
});

require __DIR__ . '/auth.php';
