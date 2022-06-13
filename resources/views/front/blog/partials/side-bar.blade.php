 <!-- /.content -->

 <div class="sidebox widget">
  <form class="searchform" action="" method="GET">
   <input style="padding:5px;" type="text" id="serch" name="search" placeholder="Search something"
    value="{{ request()->query('search') }}" onfocus="this.value=''" onblur="this.value='Search something'" />
   <button style="margin-bottom:5px;" type="submit" class="btn">Find</button>
  </form>
 </div>

 <!-- /.widget -->
 <div class="sidebox widget mt-5">
  <h3 class="widget-title section-title">Categories</h3>
  <ul class="circled">
   @foreach($categories as $category)
   <li><a href="{{ route('blog.category', $category->id) }}">{{ $category->name }}</a></li>
   @endforeach
  </ul>
 </div>
 <!-- /.widget -->
 <div class="sidebox widget mt-5">
  <h3 class="widget-title section-title">Tags</h3>
  <ul class="circled">
   @foreach($tags as $tag)
   <li><a href="{{ route('blog.tag', $tag->id) }}">{{ $tag->name }}</a></li>
   @endforeach
  </ul>
  <!-- /.tag-cloud -->

 </div>
 <!-- /.widget -->
 <!-- /.col-sm-4 .sidebar -->