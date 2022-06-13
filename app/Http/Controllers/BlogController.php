<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Tag;
use App\Models\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('front.blog.index')
               ->with('categories', Category::all())
               ->with('tags', Tag::all())
               ->with('posts', Post::searched()->paginate(2));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $post = Post::find($id);

        return view('front.blog.show')
                ->with('post', $post)
                ->with('categories', Category::all())
                ->with('tags', Tag::all());
    }

    /**
     * Show the form for editing the specified resource.
     *s
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public function category(Category $category)
    { 
        return view('front.blog.category')
               ->with('category', $category)
               ->with('posts', $category->posts()->searched()->paginate(2))
               ->with('categories', Category::all())
               ->with('tags', Tag::all());

    }

    public function tag(Tag $tag)
    {   

        return view('front.blog.tag')
               ->with('tag', $tag)  
               ->with('tags', Tag::all()) 
               ->with('categories', Category::all())
               ->with('posts', $tag->posts()->searched()->paginate(2));
               
    }

}