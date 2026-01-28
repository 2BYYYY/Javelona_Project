<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SkillControler;
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

Route::get('/', [SkillControler::class, 'index']);
// Route::get('/', fn () => view('home'));
Route::get('/about', fn () => view('about'));
Route::get('/projects', fn () => view('projects'));
Route::get('/contacts', fn () => view('contacts'));

