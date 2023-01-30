<?php

use App\Http\Controllers\ProfileController;
use App\Models\Seller;
use App\Models\User;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
})->name('welcome');

Route::get('/shop', function () {
    return view('layouts.shop');
})->name('shop');

Route::get('/cart', function () {
    return view('layouts.shoping-cart');
})->name('cart');

Route::get('/blog', function () {
    return view('layouts.blog');
})->name('blog');

Route::get('/about', function () {
    return view('layouts.about');
})->name('about');

Route::get('/contact', function () {
    return view('layouts.contact');
})->name('contact');

Route::get('/test', function () {
    $provider = (getProviderFromGuard('web'));
    dd(getModelFromGuard('web'));
});

require __DIR__.'/users.auth.php';
require __DIR__.'/sellers.auth.php';
require __DIR__.'/admins.auth.php';
