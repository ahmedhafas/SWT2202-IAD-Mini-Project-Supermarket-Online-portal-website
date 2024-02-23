<?php

use App\Http\Controllers\ContactControler;
use App\Http\Controllers\UserControlller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

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

Route::view('/','home')->name('home')->middleware('auth');

//Using DB, table 'users' to get the field value and then transfer to web page
Route::get('/about', function() {
    $users = DB::table('users')->get();
    return view('about', compact('users'));
})->name('about');


Route::view('/products','products')->name('products');
Route::view('/faq', 'faq')->name('faq');
Route::view('/contact', 'contact')->name('contact');
Route::view('/sign-in', 'sign-in')->name('sign-in');
Route::view('/sign-up','sign-up')->name('sign-up');

Route::post('/sign_up_post', [UserControlller::class, 'sign_up'])->name('sign-up_Post');
Route::post('/sign_in_post', [UserControlller::class,'sign_in'])->name('sign-in_Post');
Route::post('/sign_out', [UserControlller::class,'sign_out'])->name('sign-out');

Route::post('/contact_feedback', [UserControlller::class, 'contact'])->name('contactreg');
Route::post('/payment_gateway', [UserControlller::class, 'payment_gateway'])->name('payment_gateway');