<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\Category;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class DashboardPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.posts.index',[
                'posts' => Post::where('user_id', auth()->user()->id)->get()
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.posts.create',[
                'post' => new Post(),
                'categories' => Category::get()
            ]
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedPost = $request->validate([
            'title' => ['required', 'max:255', 'unique:posts'],
            'category_id' => ['required'],
            'image' => ['image', 'mimes:jpg,jpeg,png', 'max:2048'], // 2MB Max
            'body' => ['required']
        ]);

        // Check if new image
        if ($request->file('image')) {
            $validatedPost['image'] = $request->file('image')->store('posts-images');
        }

        $validatedPost['slug'] = Str::slug($validatedPost['title']);
        $validatedPost['user_id'] = auth()->user()->id;
        $validatedPost['excerpt'] = Str::limit(strip_tags($request->body), 100);

        // return $validatedPost;
        Post::create($validatedPost);
        return redirect('/dashboard/posts')->with('success', 'New post has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('dashboard.posts.show',[
                'post' => $post
            ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return  view('dashboard.posts.edit',[
                'post' => $post,
                'categories' => Category::get()
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $rules = [
            'title' => ['required', 'max:255'],
            'category_id' => ['required'],
            'image' => ['image', 'mimes:jpg,jpeg,png', 'max:2048'], // 2MB Max
            'body' => ['required']
        ];


        $validatedPost = $request->validate($rules);

        // Check if new image
        if ($request->file('image')) {
            // Delete old image
            if ($post->image && Storage::exists($post->image)) {
                Storage::delete($post->image);
            }
            // Upload new image
            $validatedPost['image'] = $request->file('image')->store('posts-images');
        }

        $validatedPost['slug'] = Str::slug($validatedPost['title']);
        $validatedPost['user_id'] = auth()->user()->id;
        $validatedPost['excerpt'] = Str::limit(strip_tags($request->body), 100);
        
        Post::where('id', $post->id)
            ->update($validatedPost);
        return redirect('/dashboard/posts')->with('success', 'Post has been updated!');

        // return $validatedPost;

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        // Delete image
        if ($post->image && Storage::exists($post->image)) {
            Storage::delete($post->image);
        }

        Post::destroy('id', $post->id);
        return redirect('/dashboard/posts')->with('success', 'Post has been deleted!');
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Post::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }
}
