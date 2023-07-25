<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Post::latest()->get();
        return view('crud.list', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('crud.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'judul' => 'required',
            'artikel' => 'required',
            'penulis' => 'required'
        ]);

        $content = $request->artikel;
    preg_match_all('/<img[^>]+src="data:image\/([^;]+);base64,([^">]+)"[^>]*>/', $content, $matches);

    foreach ($matches[0] as $key => $img) {
        $extension = $matches[1][$key];
        $data = base64_decode($matches[2][$key]);

        // Generate a unique filename
        $filename = Str::random(20) . '.' . $extension;

        // Store the image using Laravel's Storage facade
        Storage::disk('public')->put('ImagesArtikel/' . $filename, $data);

        // Replace the base64 encoded image with the new path in the content
        $content = str_replace($img, '<img src="' . asset('storage/ImagesArtikel/' . $filename) . '">', $content);
    }
    

        $post = Post::create([
            'judul' => $request->judul,
            'artikel' => $request->artikel,
            'penulis' => $request->penulis
        ]);

        if ($post) {
            return redirect()
                ->route('post.index')
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
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = Post::findOrFail($id);
        return view('crud.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Post::findOrFail($id);
        return view('crud.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'judul' => 'required',
            'artikel' => 'required',
            'penulis' => 'required'
        ]);

        $post = Post::findOrFail($id);

        $post -> update([
            'judul' => $request->judul,
            'artikel' => $request->artikel,
            'penulis' => $request->penulis
        ]);

        if ($post) {
            return redirect()
                ->route('post.index')
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
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post = Post::findOrFail($id);
        $post->delete();

        if ($post) {
            return redirect()
                ->route('post.index')
                ->with([
                    'success' => 'Post has been deleted successfully'
                ]);
        } else {
            return redirect()
                ->route('post.index')
                ->with([
                    'error' => 'Some problem has occurred, please try again'
                ]);
        }
    }
}
