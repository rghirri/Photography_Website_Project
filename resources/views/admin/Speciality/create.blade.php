@extends('layouts.app')

@section('content')

<div class="card card-default">
 <div class="card-header">
  <h3>Our Speciality</h3>
 </div>
 <div class="card-body">
  <form action="{{ route('speciality.store') }}" method="POST" enctype="multipart/form-data">
   @csrf
   <div class="form-group mt-2">
    <label for="title">Our Specilaity</label>
    <input type="text" class="form-control" name="title" id="title" value="">
   </div>

   <div class="form-group mt-2">
    <label for="content">Details</label>
    <input id="content" type="hidden" name="content" value="">
    <trix-editor input="content"></trix-editor>
   </div>

   </hr>

   <h2 class="mt-5">Three Speciality Provided</h2>

   <div class="form-group mt-2">
    <label for="imageone">Image One</label>
    <input type="file" class="form-control" name="imageone" id="imageone">
   </div>

   <div class="form-group mt-2">
    <label for="one">Specilaity One</label>
    <input type="text" class="form-control" name="one" id="one" value="">
   </div>

   <div class="form-group mt-2">
    <label for="onedetails">Speciality One Paragraph</label>
    <input id="onedetails" type="hidden" name="onedetails" value="">
    <trix-editor input="onedetails"></trix-editor>
   </div>


   <div class="form-group mt-2">
    <label for="imagetwo">Image Two</label>
    <input type="file" class="form-control" name="imagetwo" id="imagetwo">
   </div>

   <div class="form-group mt-2">
    <label for="two">Speciality Two</label>
    <input type="text" class="form-control" name="two" id="two" value="">
   </div>

   <div class="form-group mt-2">
    <label for="twodetails">Speciality Two Paragraph</label>
    <input id="twodetails" type="hidden" name="twodetails" value="">
    <trix-editor input="twodetails"></trix-editor>
   </div>

   <div class="form-group mt-2">
    <label for="imagethree">Image Three</label>
    <input type="file" class="form-control" name="imagethree" id="imagethree">
   </div>

   <div class="form-group mt-2">
    <label for="three">Speciality Three</label>
    <input type="text" class="form-control" name="three" id="three" value="">
   </div>

   <div class="form-group mt-2">
    <label for="threedetails">Service Three Paragraph</label>
    <input id="threedetails" type="hidden" name="threedetails" value="">
    <trix-editor input="threedetails"></trix-editor>
   </div>

   <div class="form-group mt-5">
    <button type="submit" class="btn btn-success">
     Create Speciality
    </button>
   </div>

  </form>
 </div>

</div>


@endsection


@section('scripts')
<script src=" https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.js">
</script>
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script>
flatpickr('#published_at', {

 enableTime: true

})

// In your Javascript (external .js resource or <script> tag)
$(document).ready(function() {
 $('.tags-selector').select2();
})
</script>

@endsection


@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />


@endsection