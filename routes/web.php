<?php

use Illuminate\Support\Facades\Route;
use App\Models\Postingan;
use App\Models\Post;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PinController;

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
    $data = DB::table('posts')->get();
    return view('artikel', compact('data'));
})->name('artikel');

Route::get('/tentangkami', function () {
    return view('tentang');
})->name('tentang');

Route::get('/kontak', function () {
    return view('kontak');
})->name('kontak');

Route::get('/admin', function () {
    return view('admin');
})->name('admin');

Route::resource('post', PostController::class)->middleware('auth');





Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
