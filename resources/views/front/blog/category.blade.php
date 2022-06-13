@extends('layouts.front')

@section('title')

Category {{ $category->name }}

@endsection

@section('content')

<div class="light-wrapper">
 <div class="container inner">
  <h1>{{ $category->name }}</h1>
  <div class="row">
   <div class="col-sm-8 content">
    <div class="blog-posts classic-blog">
     @forelse($posts as $post)
     <div class="post row">
      <div class="col-sm-4">
       <figure class="main icon-overlay"><a href="blog-post.html"><img src="{{ asset("/storage/".$post->image) }}"
          alt="" /></a>
       </figure>
      </div>
      <div class="col-sm-8 post-content">
       <h2 class="post-title"><a href="blog-post.html">{{ $post->title }}</a></h2>
       <div class="meta"><span class="date">{{ $post->published_at }}</span> <span class="categories"><a
          href="#">{{ $post->category->name }}</a>
       </div>
       <p>{!! $post->content !!}</p>
       <a href="{{ route('blog.show', $post->id) }}" class="more">Continue reading →</a>
      </div>
     </div>
     <hr />
     @empty
     <p class="text-center">
      No result found for query <strong>{{ request()->query('search') }}</strong>
     </p>
     @endforelse

     {{ $posts->appends([ 'search' => request()->query('search') ])->links() }}

    </div>
    <!-- /.blog-posts -->

    <!-- <div class="pagination">
     <ul>
      <li><a href="#" class="btn">Prev</a></li>
      <li class="active"><a href="#" class="btn">1</a></li>
      <li><a href="#" class="btn">2</a></li>
      <li><a href="#" class="btn">3</a></li>
      <li><a href="#" class="btn">Next</a></li>
     </ul>
    </div> -->
    <!-- /.pagination -->

   </div>
   @include('front.blog.partials.side-bar')

  </div>
  <!-- /.row -->
 </div>
</div>


@endsection