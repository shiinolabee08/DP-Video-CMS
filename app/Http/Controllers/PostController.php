<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    protected $fields_to_validate = [
        'name'=> 'required|max:255',
        'slug' => 'required|max:255',
        'feature_image' => 'image|mimes:jpeg,png,jpg|max:2048'
    ];

    protected $fields_to_validate_on_update = [ 'name'  => 'required|max:255', 'slug'  => 'required|max:255' ];

    protected $fields_to_update = ['name', 'slug', 'content', 'feature_image', 'published'];

    protected $model_class = 'App\Post';

    protected $model_class_names = [ 'post', 'posts' ];

    /**
     * Renders the form for creating a new company.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $posts = Post::all();

        return view( $this->model_class_names[1] . '.create', compact('posts', $posts));
    }
    
    /**
     * Display the specified record resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('posts.show', compact('post', $post));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $posts = Post::all();
        
        return view('posts.edit', [ 'post' => $post, 'posts' => $posts]);
    }
}
