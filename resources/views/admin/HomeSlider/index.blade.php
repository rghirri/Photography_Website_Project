@extends('layouts.app')

@section('content')

<div class="d-fles justify-content-end mb-2">
 <div class="container">
  <div class="row">
   <div class="col-md-2">
    <a href="{{ route('slider.create') }}" class="btn btn-success float-right">Add Slider Image</a>
   </div>
   <div class="col-md-2">
    <div class="d-fles justify-content-end mb-2">
     <a href="{{ route('trashed-sliders.index') }}" class="btn btn-success float-right">
      Trashed Slider Image
     </a>
    </div>
   </div>
  </div>

  <div class="card card-default">

   <div class="card-header">
    Images of Home Slider
   </div>

   <div class="card-body">

    @if($sliders->count() > 0)

    <table class="table">
     <thead>
      <th>
       Image
      </th>
      <th>
       Title
      </th>
      <th></th>
      <th></th>
     </thead>
     <tbody>
      @foreach($sliders as $slider)
      <tr>
       <td><img src="{{ asset($slider->slider) }}" width="120" height="60" alt=""></td>
       <td>{{ $slider->title }}</td>
       @if($slider->trashed())
       <td>
        <form action="{{ route('restore-slider', $slider->id) }}" method="POST">
         @csrf
         @method('PUT')
         <button type="submit" class="btn btn-info btn-sm text-white">Restore</button>
        </form>
       </td>
       @else
       <td>
        <a href="{{ route('slider.edit', $slider->id) }}" class="btn btn-info btn-sm text-white">Edit</a>
       </td>
       @endif
       <td>
        <form action="{{ route('slider.destroy', $slider->id) }}" method="POST">
         @csrf
         @method('DELETE')
         <button type="submit" class="btn btn-danger btn-sm">
          {{ $slider->trashed() ? 'Delete' : 'Trashed' }}
         </button>
        </form>
       </td>

      </tr>
      @endforeach
     </tbody>
    </table>
    @else

    <h3 class="text-center">No Images Yet</h3>

    @endif

   </div>
  </div>



  @endsection