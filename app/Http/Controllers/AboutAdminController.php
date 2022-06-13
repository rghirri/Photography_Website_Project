<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;

class AboutAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.about.index')->with('abouts', About::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.about.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       // dd(request()->all());

        $image = $request->imagework;

        $image_new_about = time().$image->getClientOriginalName();

        $image->move('upload/About', $image_new_about);

         About::create([

            'title'            => $request->title,
            'imagework'        => 'upload/About/' . $image_new_about,
            'content'          => $request->content,
            'titlechoose'      => $request->titlechoose,
            'choosedetails'    => $request->choosedetails,
            'titlehistory'     => $request->titlehistory,
            'historydetails'   => $request->historydetails,
            'titlecontact'     => $request->titlecontact,
            'contactdetails'   => $request->contactdetails

        ]);

    //    $image_gallery = $request->photo;

    //    $image_new_gallery = time().$image_gallery->getClientOriginalName();

    //    $image_gallery->move('upload/PhotoGallery', $image_new_gallery);

    //     PhotoGallery::create([

    //         'title'       =>  $title,
    //         'photo'       =>  'upload/PhotoGallery/' . $image_new_gallery

    //     ]);
        
    //     $image = $request->imagework->store('about'); 
        // dd($image);

        //  About::create([

        //     'title'            => $request->title,
        //     'imagework'        => $image,
        //     'content'          => $request->content,
        //     'titlechoose'      => $request->titlechoose,
        //     'choosedetails'    => $request->choosedetails,
        //     'titlehistory'     => $request->titlehistory,
        //     'historydetails'   => $request->historydetails,
        //     'titlecontact'     => $request->titlecontact,
        //     'contactdetails'   => $request->contactdetails

        // ]);

        //dd($slider);

        session()->flash('success', 'About created successfully.');
        // Redirect user
        return redirect(route('aboutadmin.index'));
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