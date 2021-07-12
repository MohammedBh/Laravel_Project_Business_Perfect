<?php

use App\Http\Controllers\BackofficeController;
use App\Http\Controllers\BackhomeController;
use App\Http\Controllers\BackblogController;
use App\Http\Controllers\BackportfolioController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PortfolioController;
use App\Models\Backoffice;
use App\Models\Backhome;
use App\Models\Backblog;
use App\Models\Backportfolio;
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

Route::get('/', [HomeController::class, 'index'])->name("welcome");

Route::get('/blog', [BlogController::class, 'index'])->name('blog');

Route::get('/portfolio', [PortfolioController::class, 'index'])->name('portfolio');

Route::get('/contact', function() {
    return view('pages.contact');
});

Route::get('/backoffice', [BackofficeController::class, 'index'])->name('backoffice');

Route::get('/backoffice/home', [BackhomeController::class, 'index'])->name('backhome');
Route::post('/backoffice/postbackhome', [BackhomeController::class, 'store']);
Route::delete('/backhomedelete/{id}', [BackhomeController::class, 'destroy']);

Route::get('/backoffice/blog', [BackblogController::class, 'index'])->name('backblog');
Route::post('/backoffice/postbackblog', [BackblogController::class, 'store']);
Route::delete('/backblogdelete/{id}', [BackblogController::class, 'destroy']);


Route::get('/backoffice/portfolio', [BackportfolioController::class, 'index'])->name('backportfolio');
Route::post('/backoffice/postbackportfolio', [BackportfolioController::class, 'store']);
Route::delete('/backportfoliodelete/{id}', [BackportfolioController::class, 'destroy']);