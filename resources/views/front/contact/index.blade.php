@extends('layouts.front')

@section('content')

<div class="container-fluid bg-pink">
 <div class="row">
  <div class="col-md-6 hero-banner__title">
   <h1>Contact Me</h1>
  </div>
  <div class="col-md-6">
   <picture class="">
    <img class="img-fluid" src="/css/images/contact-photography-banner-min.png" alt="" />
   </picture>
  </div>
 </div>
</div>

<div class="container mt-5">
 <!-- Success message -->
 @if(Session::has('success'))
 <div class="alert alert-success">
  {{Session::get('success')}}
 </div>
 @endif
 <form action="" method="post" action="{{ route('contact.store') }}">
  @csrf
  <div class="form-group">
   <label>Name</label>
   <input type="text" class="form-control {{ $errors->has('name') ? 'error' : '' }}" name="name" id="name">
   <!-- Error -->
   @if ($errors->has('name'))
   <div class="error">
    {{ $errors->first('name') }}
   </div>
   @endif
  </div>
  <div class="form-group">
   <label>Email</label>
   <input type="email" class="form-control {{ $errors->has('email') ? 'error' : '' }}" name="email" id="email">
   @if ($errors->has('email'))
   <div class="error">
    {{ $errors->first('email') }}
   </div>
   @endif
  </div>
  <div class="form-group">
   <label>Phone</label>
   <input type="text" class="form-control {{ $errors->has('phone') ? 'error' : '' }}" name="phone" id="phone">
   @if ($errors->has('phone'))
   <div class="error">
    {{ $errors->first('phone') }}
   </div>
   @endif
  </div>
  <div class="form-group">
   <label>Subject</label>
   <input type="text" class="form-control {{ $errors->has('subject') ? 'error' : '' }}" name="subject" id="subject">
   @if ($errors->has('subject'))
   <div class="error">
    {{ $errors->first('subject') }}
   </div>
   @endif
  </div>
  <div class="form-group">
   <label>Message</label>
   <textarea class="form-control {{ $errors->has('message') ? 'error' : '' }}" name="message" id="message"
    rows="4"></textarea>
   @if ($errors->has('message'))
   <div class="error">
    {{ $errors->first('message') }}
   </div>
   @endif
  </div>

  <div class="form-group">
   <button class="btn mt-3 mx-2 add_article_btn" type="submit" name="send" value="Submit">Send</button>
  </div>

 </form>
</div>

@endsection