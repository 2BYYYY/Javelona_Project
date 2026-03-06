<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PasswordsController;
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

Route::get('/', [ProfileController::class, 'profile'])->name('profile');

Route::middleware('pageAccess')->group(function () {
    Route::get('/skills', [SkillController::class, 'skill'])->name('skill');
    Route::get('/projects', [ProjectController::class, 'project'])->name('project');
    Route::get('/experience', [ExperienceController::class, 'experience'])->name('experience');
    Route::get('/contact', [ContactController::class, 'contact'])->name('contact');
    Route::get('/passwords', [PasswordsController::class, 'passwords'])->name('passwords');
});

Route::get('/linkedin-redirect', function () {

    session(['linkedin_clicked' => true]);
    session()->put('linkedin_clicked_expires', now()->addMinutes(1));
    return redirect('https://www.linkedin.com/in/ignatius-warren-benjamin-javelona-bab7272a4/');

})->name('linkedinClicked');