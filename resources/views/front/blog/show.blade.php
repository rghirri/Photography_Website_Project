@extends('layouts.front')


@section('content')


<div class="light-wrapper mt-5">
 <div class="container inner">
  <div class="row">
   <div class="col-sm-8 content">
    <div class="blog-posts classic-blog">
     <div class="post">

      <figure class="icon-overlay icn-enlarge">
       <a href="style/images/art/bp3.jpg" class="fancybox-media" data-rel="portfolio">
        <img src="{{ asset("/storage/".$post->image) }}" alt="" /></a>
      </figure>

      <div class="post-content image-caption">
       <h1 class="post-title">
        {{ $post->title }}
       </h1>
       <div class="meta">
        <span class="date"><a href="#">{{ $post->published_at }}</a></span>
        <span class="category"><a href="#">{{ $post->category->name }}</a>
         <span class="comments"><a href="#">5 Comments</a></span>
       </div>
       <!-- /.meta -->

       <p>
        {!! $post->content !!}
       </p>

       <div class="divide20"></div>

       <div class="meta tags">
        @foreach($post->tags as $tag)
        <a href="{{ route('blog.tag', $tag->id) }}">{{ $tag->name }} </a>
        @endforeach
       </div>
       <div class="divide10"></div>

      </div>
      <!-- /.post-content -->
     </div>
     <hr />
    </div>
    <div class="about-author">
     <div class="author-image">
      <img alt="" src="{{ Gravatar::src($post->user->email) }}" />
     </div>
     <div class="author-details">
      <h3>About the author: {{ $post->user->name }}</h3>
      <p>
       Fusce dapibus, tellus ac cursus commodo,
       tortor mauris condimentum nibh, ut
       fermentum massa justo sit amet risus.
       Maecenas faucibus mollis interdum.
      </p>

     </div>
     <div class="clearfix"></div>
    </div>
    <hr />

    <div class="section bg-gray">
     <div class="container">
      <h1 class="text-center pb-5">Comments</h1>
      <div class="row">
       <div class="col-lg-8 mx-auto">
        <div id="hyvor-talk-view"></div>
        <script type="text/javascript">
        var HYVOR_TALK_WEBSITE = 6670;
        var HYVOR_TALK_CONFIG = {
         url: "{{ config('app.url') }}blog/{{ $post->id }}",
         id: "{{ $post->id }}"
        };
        </script>
        <script async type="text/javascript" src="//talk.hyvor.com/web-api/embed.js"></script>
       </div>
      </div>

     </div>
    </div>

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

@endsection