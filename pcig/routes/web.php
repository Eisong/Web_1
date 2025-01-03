<?php

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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('welcome');
Route::get('/about', [App\Http\Controllers\HomeController::class, 'about'])->name('about');
Route::get('/contact', [App\Http\Controllers\HomeController::class, 'contact'])->name('contact');
Route::get('/news', [App\Http\Controllers\HomeController::class, 'news'])->name('news');
Route::get('/privacy', [App\Http\Controllers\HomeController::class, 'privacy'])->name('privacy');
Route::get('/terms', [App\Http\Controllers\HomeController::class, 'terms'])->name('terms');
Route::get('/disclaimer', [App\Http\Controllers\HomeController::class, 'disclaimer'])->name('disclaimer');
Route::get('/brands', [App\Http\Controllers\BrandController::class, 'show'])->name('brands.show');
Route::get('/brand/{id}', [App\Http\Controllers\BrandController::class, 'showOne'])->name('brand.show');

Route::get('/downloads/all', [App\Http\Controllers\DownloadController::class, 'index'])->name('downloads.show');
Route::post('/downloads/add', [App\Http\Controllers\DownloadController::class, 'addPdf'])->name('downloads.add');
Route::get('/downloads/delete/{id}', [App\Http\Controllers\DownloadController::class, 'delete'])->name('downloads.delete');

Route::get('/investment/option/{id}', [App\Http\Controllers\InvestmentController::class, 'showOne'])->name('investment.show');
Route::post('/investment/option/add', [App\Http\Controllers\InvestmentController::class, 'addPdf'])->name('investment.add');

Route::post('/registration/register', [App\Http\Controllers\RegistrationController::class, 'register'])->name('registration.register');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/register', [App\Http\Controllers\HomeController::class, 'index'])->name('welcome');

Route::get('/password/reset', [App\Http\Controllers\HomeController::class, 'index'])->name('welcome');

Route::get('/send-email', [App\Http\Controllers\SendEmailController::class, 'index'])->name('send-email');

Route::get('/send-email/success', [App\Http\Controllers\SendEmailController::class, 'success'])->name('send-email-success');

Route::get('/send-email/error', [App\Http\Controllers\SendEmailController::class, 'error'])->name('send-email-error');
