<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class PostController extends Controller
{
    use AuthorizesRequests;

    /**
     * Display a listing of the resource.
     */
    public function __construct() // có __construct()
    {
        $this->authorizeResource(Post::class, 'post');
    }
    public function index()
    {
        // $this->authorize('viewAny', Post::class); thì ko cần gọi authorize ở đây vì __construct() đã map qua
        $posts = Post::latest()->get();
        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Post $post)
    {
        // $this->authorize('create', $post);
        return view('posts.create', compact('post'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Post $post)
    {
        // $this->authorize('create', $post);

        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'content' => ['required', 'string',]
        ]);



        $post = $request->user()->posts()->create($data);
        // $post = Post::create([
        //     ...$data,
        //     'user_id' => $request->user()->id
        // ]);

        return redirect()->route('posts.index', $post);
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        // $this->authorize('view', $post);
        return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //$this->authorize('update', $post);
        return view('posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        // $this->authorize('update', $post);
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'content' => ['required', 'string',]
        ]);

        $post->update($data);

        return redirect()->route('posts.show', $post);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //$this->authorize('delete', $post);
        $post->delete();
        return redirect()->route('posts.index');
    }
}
