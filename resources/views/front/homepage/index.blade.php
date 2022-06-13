@extends('layouts.front')


@section('content')



<!-- Owel slider -->
<div id="owl-demo" class="owl-carousel owl-theme">
 @foreach($sliders as $slider)

 <div class="item"><img src="{{ asset($slider->slider) }}" alt="Owl Image"
   style="width: 626px; height: 530px; object-fit: cover;"></div>

 @endforeach

 <!-- <div class="item"><img src="{{ asset('app/uploads/IMAGE (10).jpg') }}" alt="Owl Image"
   style="width: 626px; height: 530px; object-fit: cover;"></div>
 <div class="item"><img src="{{ asset('app/uploads/IMAGE (11).jpg') }}" alt="Owl Image"
   style="width: 626px; height: 530px; object-fit: cover;"></div>
 <div class="item"><img src="{{ asset('app/uploads/IMAGE (12).jpg') }}" alt="Owl Image"
   style="width: 626px; height: 530px; object-fit: cover;"></div>
 <div class="item"><img src="{{ asset('app/uploads/IMAGE (13).jpg') }}" alt="Owl Image"
   style="width: 626px; height: 530px; object-fit: cover;"></div>
 <div class="item"><img src="{{ asset('app/uploads/IMAGE (14).jpg') }}" alt="Owl Image"
   style="width: 626px; height: 530px; object-fit: cover;"></div>
 <div class="item"><img src="{{ asset('app/uploads/IMAGE (15).jpg') }}" alt="Owl Image"
   style="width: 626px; height: 530px; object-fit: cover;"></div>
 <div class="item"><img src="{{ asset('app/uploads/IMAGE (16).jpg') }}" alt="Owl Image"
   style="width: 626px; height: 530px; object-fit: cover;"></div> -->

</div>



<!-- Start Main Content -->
<!-- Start our services section -->
<section id="our_services">
 <h1 hidden>what we do section</h1>
 @foreach($services as $service)
 <div class="container mb-5">
  <div class="row text-center">
   <div class="col-12">
    <h2>{{ $service->title }}</h2>
   </div>
   <div class="col-lg-8 offset-lg-2">
    <p class="lead">{!! $service->content !!}</p>
   </div>
  </div>
 </div>

 <div class="container">
  <div class="row gx-lg-5 gy-lg-5 px-lg-3 text-center">
   <div class="mt-0 mt-lg-3 col-lg-4">
    <h3><img src="/css/images/icons/camera-new-icon-last.png" alt="camera" />{{ $service->one }}</h3>
    <p class="lead">{!! $service->onedetails !!}</p>
   </div>
   <div class="mt-0 mt-lg-3 col-lg-4 text-center">
    <h3><img src="/css/images/icons/video-icon-new.png" alt="video" />{{ $service->two }}</h3>
    <p class="lead">{!! $service->twodetails !!}</p>
   </div>
   <div class="mt-0 mt-lg-3 col-lg-4 text-center">
    <h3><img src="/css/images/icons/brush up.png" alt="retouching" />{{ $service->three }}</h3>
    <p class="lead">{!! $service->threedetails !!}</p>
   </div>
  </div>
 </div>
 @endforeach
</section>
<!-- End our services section -->
<!-- Start Our Speciality   -->
<section id="our_speciality">

 @foreach($specialities as $speciality)

 <div class="container">
  <div class="row text-center">
   <div class="col-12">
    <h2>Our Speciality</h2>
   </div>
   <div class="col-lg-8 offset-lg-2">
    <p class="lead">{!! $speciality->content !!}</p>
   </div>
  </div>
 </div>

 <div class="container mt-1">
  <div class="row">
   <div class="mt-3 col-lg-4">
    <div class="card">
     <img class="card-img-top" src="{{ asset($speciality->imageone) }}" alt="Card image cap"
      style="width: 350px; height: 228px; object-fit: cover;" />
     <div class="card-body d-flex flex-column justify-content-center align-items-center">
      <h3>{{ $speciality->one }}</h3>
      <p class="lead text-center">{!! $speciality->onedetails !!}</p>
     </div>
    </div>
   </div>
   <!-- /col -->
   <div class="mt-3 col-lg-4">
    <div class="card">
     <img class="card-img-top" src="{{ asset($speciality->imagetwo) }}" alt="Card image cap"
      style="width: 350px; height: 228px; object-fit: cover;" />
     <div class="card-body d-flex flex-column justify-content-center align-items-center">
      <h3>{{ $speciality->two }}</h3>
      <p class="lead text-center">{!! $speciality->twodetails !!}</p>
     </div>
    </div>
   </div>
   <!-- /col -->
   <div class="mt-3 col-lg-4">
    <div class="card">
     <img class="card-img-top" src="{{ asset($speciality->imagethree) }}" alt="Card image cap"
      style="width: 350px; height: 228px; object-fit: cover;" />
     <div class="card-body d-flex flex-column justify-content-center align-items-center">
      <h3>{{ $speciality->three }}</h3>
      <p class="lead text-center">{!! $speciality->threedetails !!}</p>
     </div>
    </div>
   </div>
  </div>
 </div>

 @endforeach

</section>

<!-- End Our Speciality   -->

@endsection