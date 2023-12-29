<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\courseListController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\emailVerificationController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\dashboard;
use App\Http\Controllers\client\clientDashboardController;
use App\Http\Controllers\client\tutorRegistrationController;


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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('/');
Route::get('/course-list', [courseListController::class, 'index'])->name('course-list');
Route::get('/admin/dashboard', [dashboard::class, 'index'])->name('admin-dashboard');
Route::get('/client/dashboard', [clientDashboardController::class, 'index'])->name('client-dashboard');
Route::get('/client/tutorRegistration', [tutorRegistrationController::class, 'index'])->name('client-tutorRegistration');

// Route::get('/email-verification', [emailVerificationController::class, 'index'])->name('email-verification');

Route::get('/email-verification/{user}/{token}/{name}', [emailVerificationController::class, 'index'])->name('email-verification');




//email verification
Route::post('/update/email-verification', [emailVerificationController::class, 'updateEmailVerification'])->name('update.email-verification');
Route::post('/user/login', [LoginController::class, 'login'])->name('user.login');

Route::post('/store.tutor', [tutorRegistrationController::class, 'Store'])->name('store.tutor');

