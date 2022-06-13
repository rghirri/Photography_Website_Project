@extends('layouts.front')

@section('content')

<!-- Hero Banner Start  -->
<div class="container-fluid bg-pink">
 <div class="row">
  <div class="col-md-6 hero-banner__title">
   <h1>About Me</h1>
  </div>
  <div class="col-md-6">
   <picture class="">
    <img class="img-fluid" src="/css/images/about_me-min.png" alt="" />
   </picture>
  </div>
 </div>
</div>
<!-- Hero Banner End  -->

<!-- Begin about us -->
<section id="about-us">
 <div class="container mt-5">
  @foreach($abouts as $about)

  <div class="row">
   <div class="col-md-6 offset-md-3 text-center">
    <h2>{{ $about->title }}</h2>
    <p class="lead">{!! $about->content !!}</p>
   </div>
  </div>
  <div class="row mt-5">
   <div class="col-lg-6">
    <figure>
     <img class="img-fluid" src="{{ asset($about->imagework) }}" alt=""
      style="width: 466px; height: 343px; object-fit: cover;" />
    </figure>
   </div>
   <div class="col-lg-6">
    <h3>{{ $about->title }}</h3>
    <p class="lead">{!! $about->content !!}
    </p>
   </div>
  </div>
  <hr />
  <div class="row mt-3">
   <div class="col-lg-6 about-tab">
    <nav class="nav nav-pills flex-column flex-md-row">
     <a class="nav-link active" href="#Why-Choose-Us" data-toggle="tab">{{ $about->titlechoose }}</a>
     <a class="nav-link" href="#Our-History" data-toggle="tab">{{ $about->titlehistory }}</a>
     <a class="nav-link" href="#Contact-Us" data-toggle="tab">{{ $about->titlecontact }}</a>
    </nav>

    <div class="tab-content py-5">
     <div class="tab-pane active" id="Why-Choose-Us">
      <h3>{{ $about->titlechoose }}</h3>
      <p>{!! $about->choosedetails !!}</p>
     </div>
     <div class="tab-pane fade" id="Our-History">
      <h3>{{ $about->titlehistory }}y</h3>
      <p>{!! $about->historydetails !!}</p>
     </div>
     <div class="tab-pane fade" id="Contact-Us">
      <h3>{{ $about->titlecontact }}</h3>
      <p>{!! $about->contactdetails !!}</p>
     </div>
    </div>
   </div>
   <div class="col-lg-6">
    <figure class="player img-fluid">
     <iframe src="
            http://player.vimeo.com/video/25518056?title=0&amp;byline=0&amp;portrait=0&amp;badge=0" width="500"
      height="300" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowfullscreen></iframe>
    </figure>
   </div>
  </div>

  @endforeach

 </div>
</section>
<!-- End about us -->

@endsection