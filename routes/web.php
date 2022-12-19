<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardUserController;
use App\Http\Controllers\DashboardProdiController;
use App\Http\Controllers\DashboardSuratController;
use App\Http\Controllers\DashboardApproveController;
use App\Http\Controllers\DashboardHistoryController;
use App\Http\Controllers\DashboardJurusanController;
use App\Http\Controllers\DashboardProfileController;
use App\Http\Controllers\DashboardMahasiswaController;
use App\Http\Controllers\DashboardApprovesiorController;


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

Route::controller(LoginController::class)->group(function () {
    Route::get('/login', 'index')->name('login')->middleware('guest');
    Route::post('/login', 'authenticate');
    Route::post('/logout', 'logout');
});

Route::get('/', [DashboardController::class, 'index'])->name('dashboard.home')->middleware('auth');

Route::prefix('/dashboard')->group(function () {
    Route::get('/home', [DashboardController::class, 'index'])->name('dashboard.home')->middleware('auth');

    Route::get('/surat', [DashboardSuratController::class, 'index'])->name('dashboard.surat')->middleware('auth');

    Route::get('/approve', [DashboardApproveController::class, 'index'])->name('dashboard.approve')->middleware('auth');

    Route::get('/history', [DashboardHistoryController::class, 'index'])->name('dashboard.history')->middleware('auth');

    Route::get('/user', [DashboardUserController::class, 'index'])->name('dashboard.user')->middleware('auth');
    Route::get('/profile', [DashboardProfileController::class, 'index'])->name('dashboard.profile')->middleware('auth');

    Route::get('/mahasiswa', [DashboardMahasiswaController::class, 'index'])->name('dashboard.mahasiswa')->middleware('auth');
    Route::get('/approvesior', [DashboardApprovesiorController::class, 'index'])->name('dashboard.approvesior')->middleware('auth');
    Route::get('/prodi', [DashboardProdiController::class, 'index'])->name('dashboard.prodi')->middleware('auth');
    Route::get('/jurusan', [DashboardJurusanController::class, 'index'])->name('dashboard.jurusan')->middleware('auth');
});



// Route::get('/', function () {
//     return view('home');
// });

// Route::get('/surat', function () {
//     return view('surat');
// });

// Route::get('/form-surat', function () {
//     return view('form_surat');
// });

// Route::get('/akun', function () {
//     return view('akun');
// });

// Route::get('/aprove', function () {
//     return view('aprove');
// });

// // Route::get('/login', function () {
// //     return view('auth.layout.login');
// // });

// Route::get('/user', function () {
//     return view('user');
// });
