@extends('layouts.front')


@section('content')

<!-- Hero Banner Start  -->
<div class="container-fluid bg-pink">
 <div class="row">
  <div class="col-md-6">
   <picture class="">
    <img class="img-fluid" src="{{ asset('app/css/images/photo-gallery-min.png') }}" alt="" />
   </picture>
  </div>
  <div class="col-md-6 hero-banner__title">
   <h1>Photo Gallery</h1>
  </div>
 </div>
</div>
<!-- Hero Banner End  -->

<section class="wrapper  wrapper--narrow">
 <h1>Photo Gallery</h1>
 <!-- <h3>please select photos by category</h3>

 <select class="custom-select mb-3">
  <option selected>Open this select menu</option>
  <option value="all">all</option>
  <option value="animals">animals</option>
  <option value="cars">cars</option>
  <option value="farm">farm</option>
  <option value="history">history</option>
  <option value="holiday">holiday</option>
  <option value="nature">nature</option>
  <option value="sports">sports</option>
 </select> -->

 <div class="container">
  <!-- <div class="card-columns"> -->
  <div class="card-columns">
   @foreach($galleries as $gallery)
   <div class="">
    <div class=" column animals show">
     <div class="card">
      <img class="card-img-top" src="{{ asset($gallery->photo) }}" alt="Card image cap">
     </div>
    </div>
    <!-- <div class="column animals show">
     <div class="card">
      <img class="card-img-top" src="{{ asset('app/uploads/animals/IMAGE (18).jpg') }}" alt="Card image cap">
     </div>
    </div>
    <div class=" column animals show">
     <div class="card">
      <img class="card-img-top" src="{{ asset('app/uploads/animals/IMAGE (22).jpg') }}" alt="Card image cap">
     </div>
    </div> -->
   </div>
   @endforeach
   <!-- <div class="">
    <div class=" column animals show">
     <div class="card">
      <img class="card-img-top" src="{{ asset('app/uploads/animals/IMAGE (27).jpg') }}" alt="Card image cap">
     </div>
    </div>
    <div class="column animals show">
     <div class="card">
      <img class="card-img-top" src="{{ asset('app/uploads/animals/IMAGE (3).jpg') }}" alt="Card image cap">
     </div>
    </div>
    <div class=" column animals show">
     <div class="card">
      <img class="card-img-top" src="{{ asset('app/uploads/animals/IMAGE (3).jpg') }}" alt="Card image cap">
     </div>
    </div>
   </div>
   <div class="">
    <div class=" column animals show">
     <div class="card text-white text-center">
      <img class="card-img-top" src="{{ asset('app/uploads/animals/IMAGE (6).jpg') }}" alt="Card image cap">
     </div>
    </div>
    <div class="column cars show">
     <div class="card text-center">
      <img class="card-img-top" src="{{ asset('app/uploads/cars/IMAGE (26).jpg') }}" alt="Card image cap">
     </div>
    </div>
    <div class="column cars show">
     <div class="card">
      <img class="card-img" src="{{ asset('app/uploads/cars/IMAGE (26).jpg') }}" alt="Card image">
     </div>
    </div>
   </div>
   <div class="">
    <div class=" column farm show">
     <div class="card text-right">
      <img class="card-img-top" src="{{ asset('app/uploads/farm/IMAGE (14).jpg') }}" alt="Card image cap">
     </div>
    </div>
    <div class=" column history show">
     <div class="card">
      <img class="card-img-top" src="{{ asset('app/uploads/history/IMAGE (2).jpg') }}" alt="Card image cap">
     </div>
    </div>
    <div class="column history show">
     <div class="card">
      <img class="card-img-top" src="{{ asset('app/uploads/history/IMAGE (23).jpg') }}" alt="Card image cap">
     </div>
    </div>
    <div class="column history show">
     <div class="card">
      <img class="card-img-top" src="{{ asset('app/uploads/history/IMAGE (23).jpg') }}" alt="Card image cap">
     </div>
    </div>
    <div class="column history show">
     <div class="card">
      <img class="card-img-top" src="{{ asset('app/uploads/history/IMAGE (24).jpg') }}" alt="Card image cap">
     </div>
    </div>
    <div class="column history show">
     <div class="card">
      <img class="card-img-top" src="{{ asset('app/uploads/history/IMAGE (25).jpg') }}" alt="Card image cap">
     </div>
    </div>
    <div class="column holiday show">
     <div class="card">
      <img class="card-img-top" src="/uploads/holiday/IMAGE (11).jpg" alt="Card image cap">
     </div>
    </div>
    <div class="column holiday show">
     <div class="card">
      <img class="card-img-top" src="/uploads/holiday/IMAGE (13).jpg" alt="Card image cap">
     </div>
    </div>
    <div class="column holiday show">
     <div class="card">
      <img class="card-img-top" src="/uploads/holiday/IMAGE (15).jpg" alt="Card image cap">
     </div>
    </div>
    <div class="column holiday show">
     <div class="card">
      <img class="card-img-top" src="/uploads/holiday/IMAGE (16).jpg" alt="Card image cap">
     </div>
    </div>
    <div class="column holiday show">
     <div class="card">
      <img class="card-img-top" src="/uploads/holiday/IMAGE (19).jpg" alt="Card image cap">
     </div>
    </div>
    <div class="column holiday show">
     <div class="card">
      <img class="card-img-top" src="/uploads/holiday/IMAGE (29).jpg" alt="Card image cap">
     </div>
    </div>
    <div class="column nature show">
     <div class="card">
      <img class="card-img-top" src="/uploads/nature/IMAGE (1).jpg" alt="Card image cap">
     </div>
    </div>
    <div class="column nature show">
     <div class="card">
      <img class="card-img-top" src="/uploads/nature/IMAGE (10).jpg" alt="Card image cap">
     </div>
    </div>
    <div class="column nature show">
     <div class="card">
      <img class="card-img-top" src="/uploads/nature/IMAGE (12).jpg" alt="Card image cap">
     </div>
    </div>
    <div class="column nature show">
     <div class="card">
      <img class="card-img-top" src="/uploads/nature/IMAGE (17).jpg" alt="Card image cap">
     </div>
    </div>
    <div class="column nature show">
     <div class="card">
      <img class="card-img-top" src="/uploads/nature/IMAGE (20).jpg" alt="Card image cap">
     </div>
    </div>
    <div class="column nature show">
     <div class="card">
      <img class="card-img-top" src="/uploads/nature/IMAGE (5).jpg" alt="Card image cap">
     </div>
    </div>
    <div class="column nature show">
     <div class="card">
      <img class="card-img-top" src="/uploads/nature/IMAGE (9).jpg" alt="Card image cap">
     </div>
    </div>
    <div class="column sports show">
     <div class="card">
      <img class="card-img-top" src="/uploads/sports/IMAGE (8).jpg" alt="Card image cap">
     </div>
    </div>
   </div> -->
  </div>
 </div>
</section>

@endsection