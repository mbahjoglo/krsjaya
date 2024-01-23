<?php

use App\Http\Controllers\IndexController;
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

// ================ Home View ================

Route::resource('/', IndexController::class);

Route::get('home', function () {
    return view('Home.index');
});

Route::get('about', function () {
    return view('Home.about');
});

Route::get('product', function () {
    return view('Home.product');
});

Route::get('contact', function () {
    return view('Home.contact');
});

// ================ Product Item View ================

Route::get('diningtable', function () {
    return view('Home.diningtable');
});
Route::get('bartable', function () {
    return view('Home.bartable');
});
Route::get('coffetable', function () {
    return view('Home.coffetable');
});
Route::get('table', function () {
    return view('Home.table');
});
Route::get('bench', function () {
    return view('Home.bench');
});
Route::get('chairbar', function () {
    return view('Home.chairbar');
});
Route::get('sofa', function () {
    return view('Home.sofa');
});
Route::get('chair', function () {
    return view('Home.chair');
});
Route::get('nacas', function () {
    return view('Home.nacas');
});
Route::get('bed', function () {
    return view('Home.bed');
});
