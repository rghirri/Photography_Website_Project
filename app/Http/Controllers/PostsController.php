<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Posts\CreatePostsRequest;
use App\Http\Requests\Posts\UpdatePostRequest;
use Illuminate\Support\Facades\Storage;
use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;

class PostsController extends Controller
{


    public function __construct()
    {
        $this->middleware('verifyCategoriesCount')->only(['create', 'store']);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.posts.index')->with('posts', Post::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.posts.create')->with('categories', Category::all())->with('tags', Tag::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreatePostsRequest $request)
    {
        // upload the image to storage
        //dd($request->image->store('posts'));
        $image_post = $request->image;

        $image_new_name_post = time().$image_post->getClientOriginalName();

       $image_post->move('upload/Posts', $image_new_name_post);

        //create the post
        $post = Post::create([

            'title'         =>  $request->title,
            'content'       =>  $request->content,
            'image'         =>  'upload/Posts/' . $image_new_name_post,
            'published_at'  =>  $request->published_at,
            'category_id'   =>  $request->category,
            'user_id'       =>  auth()->user()->id  

        ]);

        if ($request->tags){

            $post->tags()->attach($request->tags);
            
        }

        // flash message
        session()->flash('success', 'Post created successfully.');
        // redirect user
        return redirect(route('posts.index'));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //dd($post->tags->pluck('id')->toArray());

        return view('admin.posts.create')->with('post', $post)->with('categories', Category::all())->with('tags', Tag::all());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        $data = $request->only(['title','content','published_at']);
        // Check if new image
        if($request->hasFile('image'))
        {
            // upload it
            $image = $request->image->store('posts');
            // delete old one
            //Storage::delete($post->image);
            $post->deleteImage($post->image);
            
            $data['image'] = $image;
        }

        if($request->tags)
        {
            $post->tags()->sync($request->tags);
        }

        //update attributes
        $post->update($data);
        
        // flash message
        session()->flash('success', 'Post updated successfully.');
        // redirect user
        return redirect(route('posts.index'));

    }    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $post = Post::withTrashed()->where('id', $id)->firstOrFail();

        if($post->trashed())
        {
            //Storage::delete($post->image);
            $post->deleteImage($post->image);
            $post->forceDelete();
        }else
        {
            $post->delete();
        }

        session()->flash('success', 'Post deleted successfully.');

        return redirect(route('posts.index'));
    }

    /**
     * Display a list of all trashed posts.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function trashed()
    {
        
        $trashed = Post::onlyTrashed()->get();

        return view('admin.posts.index')->withPosts($trashed);

    }


    public function restore($id)
    {
        $post = Post::withTrashed()->where('id', $id)->firstOrFail();

        $post->restore();

         session()->flash('success', 'Post restored successfully.');

        return redirect(route('posts.index'));
    }


}