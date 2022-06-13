@extends('layouts.app')

@section('content')

<div class="card card-default">
 <div class="card-header">
  <h3>
   {{ isset($slider) ? 'Edit Slider' : 'Create Slider' }}
  </h3>
 </div>
 <div class="card-body">
  <form action="{{ isset($slider) ? route('slider.update', $slider->id) : route('slider.store') }}" method="POST"
   enctype="multipart/form-data">
   @csrf

   @if(isset($slider))

   @method('PUT')

   @endif


   <div class="form-group mt-2">
    <label for="title">Slider Title</label>
    <input type="text" class="form-control" name="title" id="title" value="{{ isset($slider) ? $slider->title : '' }}">
   </div>


   @if(isset($slider))

   <div class="form-group text-center">
    <img src="{{ asset($slider->slider) }}" style="width:50%;" alt="">
   </div>

   @endif

   <div class="form-group mt-2">
    <label for="slider">Image</label>
    <input type="file" class="form-control" name="slider" id="slider">
   </div>

   <div class="form-group mt-5">
    <button type="submit" class="btn btn-success">
     {{ isset($slider) ? 'Update Slider' : 'Create Slider' }}
    </button>
   </div>

  </form>
 </div>

</div>


@endsection