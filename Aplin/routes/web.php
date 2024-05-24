<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\HandleLogin;
use App\Http\Controllers\UserController;

//route user
Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/homeUser', function () {
    return view('user_site.home');
});

Route::get('/movies', function () {
    return view('user_site.movies');
});

Route::get('/historyTicket', function () {
    return view('user_site.historyTicket');
});

Route::get('/buyticket', function () {
    return view('user_site.detailBuyTicket');
});

Route::get('/detailMovie', function () {
    return view('user_site.detailMovie');
});

Route::get('/topup', function () {
    return view('user_site.topup');
});

// Route::get('/navbar', function () {
//     return view('navbar');
// });
// Route::get('/userLayout', function () {
//     return view('user_site.userLayout');
// });






//route karyawan
Route::get('/addmoviekar', function () {
    return view('addmoviekar');
});
Route::get('/listmoviekar', function () {
    return view('listmoviekar');
});
Route::get('/historytrans', function () {
    return view('historytrans');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/profilekaryawan', function () {
    return view('menukaryawan');
});
Route::get('/addmoviekar', function () {
    return view('addmoviekar');
});
Route::get('/addoffer', function () {
    return view('addoffer');
});
Route::get('/historytrans', function () {
    return view('historytrans');
});

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
Route::get('/karyawan',[EmployeeController::class, 'index']);

Route::post('/karyawan/insert',[EmployeeController::class, 'insert']);
Route::post('/karyawan/update',[EmployeeController::class, 'update']);

//action route user
Route::post('/user/register', [UserController::class, 'register']); 
Route::post('/user/logout', [UserController::class, 'logout']); 

