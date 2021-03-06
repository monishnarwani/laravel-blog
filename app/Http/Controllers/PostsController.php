<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    //
    public function __construct () 
    {
        $this->middleware('auth')->except(['index', 'showAll', 'allposts']);
    }

    public function index()
    {
        return view('posts.index');
    }

    public function create() 
    {
        return view('posts.create');
    }

    public function store() 
    {
        // dd(request()->all());
        
        // $post = new Post;
        // $post->title = request('title');
        // $post->body = request('body');

        // $post->save();

        $this->validate(request(), [
            'title' => 'required',
            'body' => 'required'
        ]);

        Post::create([
            'title' => request('title'),
            'body' => request('body'),
            'user_id' => auth()->id
        ]);

        return redirect('/posts');
        
    }

    public function showAll() 
    {
        $posts = Post::latest()->get();

        return view('posts.index', compact('posts'));
    }

    public function allposts() 
    {
        $posts = Post::latest()->get();

        return $posts;
    }

    public function findById(Post $post)
    {
        return view('posts.show',compact('post'));
    }
}
