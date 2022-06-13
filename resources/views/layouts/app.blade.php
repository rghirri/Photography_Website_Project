<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">

 <!-- CSRF Token -->
 <meta name="csrf-token" content="{{ csrf_token() }}">

 <title>{{ config('app.name', 'Laravel') }}</title>



 <!-- Fonts -->
 <link rel="dns-prefetch" href="//fonts.gstatic.com">
 <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

 <!-- Styles -->
 <link href="{{ asset('css/app.css') }}" rel="stylesheet">

 @yield('css')

</head>

<body>
 <div id="app">
  @auth
  <nav class="navbar navbar-expand-lg navbar-light" style="background:#f1e8e7;">
   <div class="container">
    <a class="navbar-brand" href="{{ route('homepage.index') }}"> <img
      src="{{ asset('app/css/images/photograpy_logo-100x100.png') }}" alt="logo" class="img-fluid" /></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
     aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
     <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
     <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item dropdown">
       <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
        aria-expanded="false">
        Home
       </a>
       <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
        <li><a class="dropdown-item" href="{{ route('slider.index') }}">Slider</a></li>
        <li><a class="dropdown-item" href="{{ route('services.index') }}">Services</a></li>
        <li><a class="dropdown-item" href="{{ route('speciality.index') }}">Speciality</a></li>
       </ul>
      </li>
      <li class="nav-item dropdown">
       <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
        aria-expanded="false">
        Blog
       </a>
       <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
        @if(auth()->user()->isAdmin())
        <li><a class="dropdown-item" href="{{ route('users.index') }}">Users</a></li>
        @endif
        <li><a class="dropdown-item" href="{{ route('posts.index') }}">Posts</a></li>
        <li><a class="dropdown-item" href="{{ route('categories.index') }}">Categories</a></li>
        <li><a class="dropdown-item" href="{{ route('tags.index') }}">Tags</a></li>
        <li>
         <hr class="dropdown-divider">
        </li>
        <li><a class="dropdown-item" href="{{ route('trashed-posts.index') }}">Trashed Posts</a></li>
       </ul>
      </li>
      <li class="nav-item">
       <a class="nav-link" href="{{ route('photoadmingallery.index') }}">Photo Gallery</a>
      </li>
      <li class="nav-item">
       <a class="nav-link" href="{{ route('aboutadmin.index') }}">About Me</a>
      </li>

     </ul>
     <ul class="navbar-nav ms-auto">
      <!-- Authentication Links -->
      @guest
      @if (Route::has('login'))
      <li class="nav-item">
       <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
      </li>
      @endif

      @if (Route::has('register'))
      <li class="nav-item">
       <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
      </li>
      @endif
      @else
      <li class="nav-item dropdown">
       <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
        aria-haspopup="true" aria-expanded="false" v-pre>
        {{ Auth::user()->name }}
       </a>

       <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="{{ route('users.edit-profile') }}">
         My Profile
        </a>

        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
         {{ __('Logout') }}
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
         @csrf
        </form>
       </div>
      </li>
      @endguest
     </ul>
    </div>
   </div>
  </nav>
  <div class="container mt-5">
   @if(session()->has('success'))
   <div class="alert alert-success">
    {{ session()->get('success') }}
   </div>
   @endif
   @if(session()->has('error'))
   <div class="alert alert-danger">
    {{ session()->get('error') }}
   </div>
   @endif
   @yield('content')
  </div>
  @else
  <div class="container" style="margin-top:200px">
   <div class="offset-md-2 col-md-8 offset-md-2">
    @yield('content')
   </div>
  </div>
  @endauth

  <!-- <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
   <div class="container">
    <a class="navbar-brand" href="{{ url('/') }}">
     <img src="{{ asset('app/css/images/photograpy_logo-100x100.png') }}" alt="logo" class="img-fluid" />
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
     aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
     <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
     <!-- Left Side Of Navbar -->
  <!-- <ul class="navbar-nav me-auto">
   <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="#">Home</a>
   </li>
   <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="#">Blog</a>
   </li>
   <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="#">Photo Gallery</a>
   </li>
   <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="#">About Me</a>
   </li>
  </ul>

  <!-- Right Side Of Navbar -->

  <!-- </div>
 </div>
 </nav> -->

  <!-- <main class="py-4">  -->


  <!-- @auth
  <div class="container">
   <div class="row">
    <div class="col-md-4">

     <ul class="list-group">

      @if(auth()->user()->isAdmin())
      <li class="list-group-item">
       <a href="{{ route('users.index') }}" class="nav-link" href="">Users</a>
      </li>
      @endif

      <li class="list-group-item">
       <a class="nav-link" href="{{ route('posts.index') }}">Posts</a>
      </li>
      <li class="list-group-item">
       <a class="nav-link" href="{{ route('categories.index') }}">Categories</a>
      </li>
      <li class="list-group-item">
       <a class="nav-link" href="{{ route('tags.index') }}">Tags</a>
      </li>
     </ul>
     <ul class="list-group mt-5">
      <li class="list-group-item">
       <a class="nav-link" href="{{ route('trashed-posts.index') }}">Trashed Posts</a>
      </li>
     </ul>
    </div>
    <div class="col-md-8">
     @if(session()->has('success'))
     <div class="alert alert-success">
      {{ session()->get('success') }}
     </div>
     @endif
     @if(session()->has('error'))
     <div class="alert alert-danger">
      {{ session()->get('error') }}
     </div>
     @endif
     @yield('content')
    </div>
   </div>
  </div>
  @else
  @yield('content')
  @endauth
  </main> -->
 </div>

 <!-- Scripts -->

 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>
 <!-- Scripts -->
 <script src="{{ asset('js/app.js') }}"></script>

 @yield('scripts')

</body>

</html>