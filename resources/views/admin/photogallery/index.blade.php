@extends('layouts.app')

@section('content')

<div class="d-fles justify-content-end mb-2">
 <a href="{{ route('photoadmingallery.create') }}" class="btn btn-success float-right">Add Photo</a>
</div>
<div class="card-header">
 Images of Home Slider
</div>

<div class="card-body">
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
   @foreach($galleries as $gallery)
   <tr>
    <td><img src="{{ asset($gallery->photo) }}" width="300" height=300" alt=""></td>
    <td>{{ $gallery->title }}</td>
   </tr>
   @endforeach
  </tbody>
 </table>


</div>
</div>



@endsection