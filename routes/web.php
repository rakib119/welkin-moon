<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\TeamController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('fontend.index');
// });

Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/home', [DashboardController::class, 'index']);
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/our-team', [HomeController::class, 'team'])->name('ourteam');
Route::get('/our-projects', [HomeController::class, 'ourProjects'])->name('our_projects');
Route::get('/contact', [HomeController::class, 'contactUs'])->name('contact_us');
Route::resource('team', TeamController::class);
Route::resource('slider', SliderController::class);
Route::resource('faq', FaqController::class);
Route::resource('project', ProjectController::class);

