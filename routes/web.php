<?php

use Illuminate\Support\Facades\Route;
use App\Models\Postingan;
use App\Models\Post;

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

Route::get('/create', function () {
    return view('crud.create');
})->name('create');

Route::post('/store', function () {
    $this->validate($request, [
        'judul' => 'require',
        'artikel' => 'required',
        'penulis' => 'required'
    ]);

    $post = Post::create([
        'judul' => $request->judul,
        'artikel' => $request->artikel,
        'penulis' => $request->penulis
    ]);

    if ($post) {
        return redirect()
            ->route('artikel')
            ->with([
                'success' => 'New post has been created successfully'
            ]);
    } else {
        return redirect()
            ->back()
            ->withInput()
            ->with([
                'error' => 'Some problem occurred, please try again'
            ]);
    }
})->name('store');

Route::resource('post', Post::class);


