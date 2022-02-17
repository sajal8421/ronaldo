<?php

use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Frontend\FrontendControll;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/', [FrontendControll::class, "index"])->name('frontend.home');

Auth::routes();

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.home');
