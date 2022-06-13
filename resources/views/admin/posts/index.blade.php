@extends('layouts.app')

@section('content')

<div class="d-fles justify-content-end mb-2">
 <a href="{{ route('posts.create') }}" class="btn btn-success float-right">Add Post</a>
</div>


<div class="card card-default">

 <div class="card-header">
  Posts
 </div>

 <div class="card-body">

  @if($posts->count() > 0)
  <table class="table">
   <thead>
    <th>
     Image
    </th>
    <th>
     Title
    </th>
    <th>
     Category
    </th>
    <th></th>
    <th></th>
   </thead>
   <tbody>
    @foreach($posts as $post)
    <tr>
     <td><img src="{{ asset($post->image) }}" width="120" height="60" alt=""></td>
     <td>{{ $post->title }}</td>
     <td>
      <a class="nav-link" href="{{ route('categories.edit', $post->category->id) }}">
       {{ $post->category->name }}
      </a>
     </td>
     @if(!$post->trashed())
     <td>
      <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-info btn-sm text-white">Edit</a>
     </td>
     @else
     <td>
      <form action="{{ route('restore-posts', $post->id) }}" method="POST">
       @csrf
       @method('PUT')
       <button type="submit" class="btn btn-info btn-sm text-white">Restore</button>
      </form>
     </td>
     @endif
     <td>
      <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
       @csrf
       @method('DELETE')
       <button type="submit" class="btn btn-danger btn-sm text-white">
        {{ $post->trashed() ? 'Delete' : 'Trashed' }}
       </button>
      </form>
     </td>
    </tr>
    @endforeach
   </tbody>
  </table>
  @else
  <h3 class="text-center">No Posts Yet</h3>
  @endif
 </div>

</div>


@endsection