<?php

use App\Http\Controllers\Product;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;


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
/*
Route::get('/', function () {
    return view('welcome');
});
*/
//referral
Route::get('/', function () {
    Cookie::queue(Cookie::make('test', '123', 60));

    return view('welcome');
});

Route::get('/cookie', function () {
    return Cookie::get('referral');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/referral-link', [App\Http\Controllers\HomeController::class, 'referral'])->name('referral');
Route::get('/product', [App\Http\Controllers\Home::class, 'product'])->name('product');

//  Route::get('/product', [resources\views\product::class, 'product'])->name('product.blade.php');

Route::get('/categories/{id}/product', [Product::class, 'index']) ;
//Route::get('home',[Product::class, 'index']);



//Route::get('/product','Product@index')->name('product');
//referral
//Route::get('/referral-link', 'HomeController@referral');
//Route::get('/referrer', 'HomeController@referrer');
//Route::get('/referrals', 'HomeController@referrals');
