<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\handleKaryawan;
use App\Http\Controllers\HandleLogin;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\TopupController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LicenseController;


//USER
Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', function () {
    return view('register');
});
Route::post('/user/login',[HandleLogin::class, 'login']);
Route::post('/user/register',[UserController::class, 'register']);

Route::post('/logout', [UserController::class, 'logout']); 


Route::prefix('home')->name('home.')->group(function () {
    Route::get('/', [UserController::class, 'index'])->name('index');
    Route::get('/{id}/detail', [MovieController::class, 'showDetail'])->name('detail');
});

Route::prefix('movies')->name('movies.')->group(function () {
    Route::get('/', [MovieController::class, 'index'])->name('index');
    Route::get('/{id}/detail', [MovieController::class, 'showDetail'])->name('detail');
    
});

Route::prefix('history')->name('history.')->group(function () {
    Route::get('/', [HistoryController::class, 'index'])->name('index');
   
});
// Route::prefix('order')->name('order.')->group(function () {
//     Route::get('/', [UserController::class, 'index'])->name('index');
    
// });
Route::prefix('topup')->name('topup.')->group(function () {
    Route::get('/', [TopupController::class, 'index'])->name('index');
    Route::post('/process', [TopupController::class, 'process'])->name('process');
    Route::get('/checkout/{topup}', [TopupController::class, 'checkout'])->name('checkout');
    Route::get('/success/{topup}', [TopupController::class, 'success'])->name('success');
});

// Route::get('/buyticket', function () {
//     return view('user_site.detailBuyTicket');
// });

Route::get('/tes', function () {
    return view('user_site.checkout');
});

// Route::get('/userLayout', function () {
//     return view('user_site.userLayout');
// });


//KARYAWAN
Route::get('/historytrans', function () {
    return view('historytrans');
});

Route::get('/addmoviekar', function () {
    return view('addmoviekar');
});

Route::prefix('addoffer')->group(function () {
    Route::get('/', [handleKaryawan::class, 'listoffer']);
    Route::post('/add', [handleKaryawan::class, 'addoffer']);
    Route::post('/update', [handleKaryawan::class, 'updateoffer']);
    Route::post('/delete', [handleKaryawan::class, 'deleteoffer']);
});

Route::get('/historytrans', [handleKaryawan::class, 'listHistory']);

Route::get('/profilekaryawan', [handleKaryawan::class, 'listemployee'])->name('profilekaryawan');

Route::get('/listmoviekar', [handleKaryawan::class, 'listmovie']);

Route::get('/addmoviekar', [handleKaryawan::class, 'listmovies']);

// route admin
Route::get('/admin', function () {
    return view('Admin');
});
Route::get('/menukaryawan', function () {
    return view('menukaryawan');
});

<<<<<<< HEAD
//action route admin
=======

//ADMIN
>>>>>>> origin/Merry
Route::get('/karyawan',[EmployeeController::class, 'index']);
Route::post('/karyawan/insert',[EmployeeController::class, 'insert']);
Route::patch('/karyawan/update',[EmployeeController::class, 'update']);
Route::delete('/karyawan/delete',[EmployeeController::class, 'delete']);

Route::get('/beli',[LicenseController::class, 'index']);



Route::post('/login',[HandleLogin::class, 'login']);




