<?php

use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Artisan;
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

Route::get('/clear-cache', function () {
    $exitCode = Artisan::call('cache:clear');
    // return what you want
});

// ================ Home View ================

Route::resource('/', IndexController::class);

Route::get('home', function () {
    return view('home.index');
});

Route::get('about', function () {
    return view('home.about');
});

Route::get('product', function () {
    return view('home.product');
});

Route::get('contact', function () {
    return view('home.contact');
});

// ================ Product Item View ================

Route::get('diningtable', function () {
    return view('home.diningtable');
});
Route::get('bartable', function () {
    return view('home.bartable');
});
Route::get('coffetable', function () {
    return view('home.coffetable');
});
Route::get('table', function () {
    return view('home.table');
});
Route::get('bench', function () {
    return view('home.bench');
});
Route::get('chairbar', function () {
    return view('home.chairbar');
});
Route::get('sofa', function () {
    return view('home.sofa');
});
Route::get('chair', function () {
    return view('home.chair');
});
Route::get('nacas', function () {
    return view('home.nacas');
});
Route::get('bed', function () {
    return view('home.bed');
});
