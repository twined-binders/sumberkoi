<?php

use Illuminate\Support\Facades\Route;
use App\Models\Postingan;

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
})->name('home');

Route::get('/artikel', function () {
    $data = DB::table('post')->get();
    return view('artikel', compact('data'));
})->name('artikel');

Route::get('/tentangkami', function () {
    return view('tentang');
})->name('tentang');

Route::get('/kontak', function () {
    return view('kontak');
})->name('kontak');


