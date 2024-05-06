<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\handleKaryawan;
use App\Http\Controllers\HandleLogin;


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

//route user
Route::get('/', function () {
    return view('welcome');
});

Route::get('/profilekaryawan', function () {
    return view('menukaryawan');
});

Route::get('/addmoviekar', function () {
    return view('addmoviekar');
});

Route::get('/listmoviekar', function () {
    return view('listmoviekar');
});

Route::get('/addoffer', function () {
    return view('addoffer');
});

Route::get('/historytrans', function () {
    return view('historytrans');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/buyticket', function () {
    return view('detailBuyTicket');
});

//route karyawan
Route::get('/profilekaryawan', function () {
    return view('menukaryawan');
});
Route::get('/addmoviekar', function () {
    return view('addmoviekar');
});

Route::get('/addoffer', [handleKaryawan::class, 'listoffer']);
Route::post('/addoffer/add', [handleKaryawan::class, 'addoffer']);

Route::get('/historytrans', function () {
    return view('historytrans');
});
Route::get('/homeUser', function () {
    return view('homeUser');
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
