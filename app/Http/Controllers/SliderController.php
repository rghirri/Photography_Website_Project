<?php

namespace App\Http\Controllers;

use App\Http\Requests\Slider\UpdateSlidersRequest;
use App\Http\Requests\Slider\CreateSlidersRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\HomeSlider;


class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.homeSlider.index')->with('sliders', HomeSlider::all());
    }


    /**
     * view in front homepage
     */
    public function homepage()
    {
        return view('homepage')->with('sliders', HomeSlider::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.HomeSlider.create');
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

       $title = $request->title;

       //$image = $request->slider->store('HomeSlider');

       $image = $request->slider;

       $image_new_name = time().$image->getClientOriginalName();

       $image->move('upload/HomeSlider', $image_new_name);

        HomeSlider::create([

            'title'       =>  $title,
            'slider'      =>  'upload/HomeSlider/' . $image_new_name

        ]);

        //dd($slider);

        session()->flash('success', 'Slider Image created successfully.');
        // Redirect user
        return redirect(route('slider.index'));

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
    public function edit(HomeSlider $slider)
    {
        return view('admin.HomeSlider.create')->with('slider', $slider);
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
        $slider_title = HomeSlider::find($id);
        
        if($request->hasFile('slider'))
        {

            $image = $request->slider;

            $image_new_name = time().$image->getClientOriginalName();

            $image->move('upload/HomeSlider', $image_new_name);

            $slider_title->slider = 'upload/HomeSlider/' . $image_new_name;
            
        }

        $slider_title->title = $request->title;

        $slider_title->save();
        
        // flash messsage
        session()->flash('success', 'Slider updated successfully.');

        //redirect user
        return redirect(route('slider.index'));


    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $slider = HomeSlider::withTrashed()->where('id', $id)->firstOrFail();

        if($slider->trashed())
        {
            $slider->deleteImage($slider->slider);
            $slider->forceDelete();
            
        }else
        {
            $slider->delete();
        }

        session()->flash('success', 'Slider deleted successfully.');

        return redirect()->back();

    }


     /**
     * Display a list of all trashed sliders.
     *
     * @return \Illuminate\Http\Response
     */
    public function trashed()
    {
        
        return view('admin.homeSlider.index')->with('sliders', HomeSlider::onlyTrashed()->get());

    }

    public function restore($id)
    {
         $slider = HomeSlider::withTrashed()->where('id', $id)->firstOrFail();

        $slider->restore();

         session()->flash('success', 'Slider restored successfully.');

        return redirect()->back();
    }

}