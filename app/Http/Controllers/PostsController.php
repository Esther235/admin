<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\Models\Post;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('post.index', [
            'image' => 'undraw_profile.svg',
            'post' => Post::all()
        ]);
    }

    // /**
    //  * Show the form for creating a new resource.
    //  */
    // public function create()
    // {
    //     return view('post.singlePost.create');
    // }

    // /**
    //  * Store a newly created resource in storage.
    //  */
    // public function store(Request $request)
    // {
    //     $validatedData = $request->validate([
    //         'title' => 'required|max:255',
    //         'slug' => 'required|unique:posts',
    //         'body' => 'required',
    //     ]);

    //     $validatedData['user_id'] = auth()->user()->id;
    //     $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 100, '...');

    //     Post::create($validatedData);

    //     return redirect('/dashboard/post')->with('success', 'New post has been added!');
    // }

    // /**
    //  * Display the specified resource.
    //  */
    // public function show(Post $post)
    // {
    //     return view('post.singlePost.show', [
    //         'post' => $post,
    //     ]);
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  */
    // public function edit(string $id)
    // {
    //     //
    // }

    // /**
    //  * Update the specified resource in storage.
    //  */
    // public function update(Request $request, string $id)
    // {
    //     //
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  */
    // public function destroy(string $id)
    // {
    //     //
    // }
    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Post::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }
}
