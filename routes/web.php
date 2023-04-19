<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\front\homepageController;

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

Route::get('/', [homepageController::class, "index"])->name("homepage");
Route::get('/{category}/{slug}', [homepageController::class, "single"])->name('single');
