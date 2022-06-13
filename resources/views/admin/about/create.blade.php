@extends('layouts.app')

@section('content')

<div class="card card-default">
 <div class="card-header">
  <h3>About Page</h3>
 </div>
 <div class="card-body">
  <form action="{{ route('aboutadmin.store') }}" method="POST" enctype="multipart/form-data">
   @csrf
   <div class="form-group mt-2">
    <label for="title">Our Working Place</label>
    <input type="text" class="form-control" name="title" id="title" value="">
   </div>

   <div class="form-group mt-2">
    <label for="imagework">Work Image</label>
    <input type="file" class="form-control" name="imagework" id="imagework">
   </div>

   <div class="form-group mt-2">
    <label for="content">Details</label>
    <input id="content" type="hidden" name="content" value="">
    <trix-editor input="content"></trix-editor>
   </div>

   </hr>

   <h1>Tabs Section</h1>

   <h2 class="mt-5">Why Choose Us</h2>

   <div class="form-group mt-2">
    <label for="titlechoose">Title</label>
    <input type="text" class="form-control" name="titlechoose" id="titlechoose" value="">
   </div>

   <div class="form-group mt-2">
    <label for="choosedetails">Details</label>
    <input id="choosedetails" type="hidden" name="choosedetails" value="">
    <trix-editor input="choosedetails"></trix-editor>
   </div>


   <h2 class="mt-5">Our History</h2>

   <div class="form-group mt-2">
    <label for="titlehistory">Title</label>
    <input type="text" class="form-control" name="titlehistory" id="titlehistory" value="">
   </div>

   <div class="form-group mt-2">
    <label for="historydetails">Details</label>
    <input id="historydetails" type="hidden" name="historydetails" value="">
    <trix-editor input="historydetails"></trix-editor>
   </div>

   <h2 class="mt-5">Contact Us</h2>

   <div class="form-group mt-2">
    <label for="titlecontact">Title</label>
    <input type="text" class="form-control" name="titlecontact" id="titlecontact" value="">
   </div>

   <div class="form-group mt-2">
    <label for="contactdetails">Details</label>
    <input id="contactdetails" type="hidden" name="contactdetails" value="">
    <trix-editor input="contactdetails"></trix-editor>
   </div>



   <div class="form-group mt-5">
    <button type="submit" class="btn btn-success">
     Create About
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