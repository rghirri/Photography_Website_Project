@extends('layouts.app')

@section('content')

<div class="card card-default">
 <div class="card-header">
  <h3>Gallery Image</h3>
 </div>
 <div class="card-body">
  <form action="{{ route('photoadmingallery.store') }}" method="POST" enctype="multipart/form-data">
   @csrf
   <div class="form-group mt-2">
    <label for="title">Photo Title</label>
    <input type="text" class="form-control" name="title" id="title" value="">
   </div>

   <div class="form-group mt-2">
    <label for="photo">Image</label>
    <input type="file" class="form-control" name="photo" id="photo">
   </div>

   <div class="form-group mt-5">
    <button type="submit" class="btn btn-success">
     Create Gallery Image
    </button>
   </div>

  </form>
 </div>

</div>


@endsection