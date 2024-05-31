<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\handleKaryawan;
use App\Http\Controllers\HandleLogin;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\TopupController;
use App\Http\Controllers\UserController;

//route user
Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', function () {
    return view('register');
});


Route::post('/logout', [UserController::class, 'logout']); 
Route::post('/user/register', [UserController::class, 'register']); 


Route::prefix('home')->name('home.')->group(function () {
    Route::get('/', [UserController::class, 'index'])->name('index');
    Route::get('/{id}', [UserController::class, 'index'])->name('detailmovie');
});


Route::prefix('movies')->name('movies.')->group(function () {
    Route::get('/', [MovieController::class, 'index'])->name('index');
});


Route::prefix('history')->name('history.')->group(function () {
    Route::get('/', [HistoryController::class, 'index'])->name('index');
   
});
// Route::prefix('order')->name('order.')->group(function () {
//     Route::get('/', [UserController::class, 'index'])->name('index');
    
// });
Route::prefix('topup')->name('topup.')->group(function () {
    Route::get('/', [TopupController::class, 'index'])->name('index');
});


// Route::get('/buyticket', function () {
//     return view('user_site.detailBuyTicket');
// });

// Route::get('/detailMovie', function () {
//     return view('user_site.detailMovie');
// });

// Route::get('/navbar', function () {
//     return view('navbar');
// });
// Route::get('/userLayout', function () {
//     return view('user_site.userLayout');
// });






//route karyawan

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

Route::get('/listfilm', [handleKaryawan::class, 'listfilm']);

Route::get('/profilekaryawan', [handleKaryawan::class, 'listemployee'])->name('profilekaryawan');

Route::get('/listmoviekar', [handleKaryawan::class, 'listmovie']);

Route::get('/addmoviekar', [handleKaryawan::class, 'listmovies']);

Route::post('/addscreening', [handleKaryawan::class, 'addscreening']);

Route::post('/editscreening', [handleKaryawan::class, 'editScreen']);

Route::post('/editmovie', [handleKaryawan::class, 'editMovie']);

Route::post('/deletefilm', [handleKaryawan::class, 'deleteFilm']);

Route::post('/deletescreening', [handleKaryawan::class, 'deleteScreen']);

// route admin
Route::get('/admin', function () {
    return view('Admin');
});
Route::get('/beli', function () {
    return view('BeliFilm');
});
Route::get('/karyawan', function () {
    return view('Karyawan');
});
Route::get('/menukaryawan', function () {
    return view('menukaryawan');
});



Route::post('/login',[HandleLogin::class, 'login']);

//action route admin
Route::get('/karyawan',[EmployeeController::class, 'index']);
Route::post('/karyawan/insert',[EmployeeController::class, 'insert']);
Route::patch('/karyawan/update',[EmployeeController::class, 'update']);
Route::delete('/karyawan/delete',[EmployeeController::class, 'delete']);


//action route user

