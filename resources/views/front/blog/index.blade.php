@extends('layouts.front')

@section('content')
<!-- Hero Banner Start  -->
<div class="container-fluid bg-pink">
 <div class="row">
  <div class="col-md-6">
   <picture class="">
    <img class="img-fluid" src="{{ asset('app/css/images/blog-list-min.png') }}" alt="" />
   </picture>
  </div>
  <div class="col-md-6 hero-banner__title">
   <h1>My Blog</h1>
  </div>
 </div>
</div>
<!-- Hero Banner End  -->

<!-- ---- -->

<!-- Begin Blog -->
<section id="blog-list">
 <div class="light-wrapper">
  <div class="container inner">
   <div class="row">
    <div class="col-lg-8 content">
     <div class="blog-posts grid-blog">

      <div class="row">
       @forelse($posts as $post)
       <div class="post col-lg-6">
        <figure class="main icon-overlay">
         <a href="blog-post.html"><span class="icn-more"></span><img src="{{ asset($post->image) }}" alt=""
           style="width: 350px; height: 225px; object-fit: cover;"></a>
        </figure>
        <div class="post-content">

         <h3 class="post-title">{{ $post->title }}</h3>

         <div class="meta">
          <span class="date">{{ \Carbon\Carbon::parse($post->published_at)->format('d/m/Y')}} |</span> <span
           class="categories"><a href="#">{{ $post->category->name }}</a>
         </div>
         <p class="lead">{!! $post->content !!}</p>
         <a href="{{ route('blog.show', $post->id) }}" class="more">Continue reading →</a>
        </div>
       </div>
       <hr>
       @empty
       <p class="text-center">
        No result found for query <strong>{{ request()->query('search') }}</strong>
       </p>
       @endforelse

      </div>
      <hr>
      {{ $posts->links() }}

     </div>
     <!-- /.blog-posts -->
     <!--  -->

     <!-- /.pagination -->
    </div>
    <!-- /.content -->
    <aside class="col-lg-4 sidebar pl-5">
     @include('front.blog.partials.side-bar')
    </aside>

    <!-- /.col-sm-4 .sidebar -->
   </div>
   <!-- /.row -->
  </div>
 </div>
</section>
<!-- End Blog -->

@endsection