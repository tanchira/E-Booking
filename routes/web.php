<?php

use App\Http\Controllers\bookingConfirmController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\bookingController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\EditDashboardController;
use App\Http\Controllers\singinController;
use App\Http\Controllers\singupController;
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

Route::get('/', function () {
    return view('singin');
});

/* Route::get('/singin', function () {
    return view('singin');
}); */

Route::get('/singup', function () {
    return view('singup');
});
Route::get('/singin', [singinController::class ,'viewSingin']);
Route::get('/singup', [singupController::class ,'viewSingup']);
Route::get('/home', [homeController::class ,'viewHome']);
Route::get('/booking', [bookingController ::class ,'viewbooking']);
Route::get('/bookingConfirm', [bookingConfirmController ::class ,'viewbookingConfirm']);
Route::get('/dashboard', [dashboardController ::class ,'viewdashdoard']);
Route::get('/editdashboard', [EditDashboardController ::class ,'vieweditdashboard']);



/* Route::get('/test',  function () {
    return view('test');
});
Route::post('/postdata', [homeController::class ,'post'])->name('postdata'); */