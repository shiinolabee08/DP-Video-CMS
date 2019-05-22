<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    protected $fields_to_validate = [
        'name'=> 'required|max:255',
        'slug' => 'required|max:255',
        'feature_image' => 'image|mimes:jpeg,png,jpg|max:2048'
    ];

    protected $fields_to_validate_on_update = [ 'name'  => 'required|max:255', 'slug'  => 'required|max:255' ];

    protected $fields_to_update = ['name', 'slug', 'content', 'feature_image', 'published'];

    protected $model_class = 'App\Page';

    protected $model_class_names = [ 'page', 'pages' ];

    /**
     * Renders the form for creating a new company.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pages = Page::all();

        return view( $this->model_class_names[1] . '.create', compact('pages', $pages));
    }
    
    /**
     * Display the specified record resource.
     *
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function show(Page $page)
    {
        return view('pages.show', compact('page', $page));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function edit(Page $page)
    {
        $pages = Page::all();
        
        return view('pages.edit', [ 'page' => $page, 'pages' => $pages]);
    }
}
