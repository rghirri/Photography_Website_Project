<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PhotoGallery;

class PhotoAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.photogallery.index')->with('galleries', PhotoGallery::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('admin.photogallery.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd(request()->all());

        // upload the image to storage
       //dd($request->slider->store('HomeSlider'));
       // dd($request->image->store('posts'));

    //    $title = $request->title;

       //$image = $request->slider->store('HomeSlider');

    //    $image = $request->slider;

    //    $image_new_name = time().$image->getClientOriginalName();

    //    $image->move('upload/HomeSlider', $image_new_name);

    //     HomeSlider::create([

    //         'title'       =>  $title,
    //         'slider'      =>  'upload/HomeSlider/' . $image_new_name

    //     ]);

        //dd($slider);

        // session()->flash('success', 'Slider Image created successfully.');
        // Redirect user
        // return redirect(route('slider.index'));

//-------------------------------

       // dd(request()->all());

        // upload the image to storage
       //dd($request->slider->store('HomeSlider'));
       // dd($request->image->store('posts'));
       
       $title = $request->title;

       $image_gallery = $request->photo;

       $image_new_gallery = time().$image_gallery->getClientOriginalName();

       $image_gallery->move('upload/PhotoGallery', $image_new_gallery);

        PhotoGallery::create([

            'title'       =>  $title,
            'photo'       =>  'upload/PhotoGallery/' . $image_new_gallery

        ]);

        //dd($slider);

        session()->flash('success', 'Slider Image created successfully.');
        // Redirect user
        return redirect(route('photoadmingallery.index'));
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
}