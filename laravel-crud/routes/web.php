<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admincontroller;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('signup', function () {
    return view('signup');
});
Route::get('admindashboard', function () {
    return view('admindashboard');
});
Route::get('update', function () {
    return view('update');
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        if(Auth::User()->role==0){
            return view('dashboard');
            }
            else{
            return view('welcom');
            }
    })->name('dashboard');
});

Route::post('/signupdata',[admincontroller::class,'signup']);
Route::get('/admindashboard',[admincontroller::class,'signdata']);
Route::get('/delesignup/{uid}',[admincontroller::class,'deletesignuprecord']);
Route::get('/updatesignup/{uid}',[admincontroller::class,'updatesignuprecord']);
Route::post('/signupdataupdate',[admincontroller::class,'updatesignup']);

