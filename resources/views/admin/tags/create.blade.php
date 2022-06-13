@extends('layouts.app')

@section('content')

<div class="d-fles justify-content-end mb-2">
 <div class="card-header">
  {{ isset($tag) ? 'Edit Tag' : 'Create Tag'}}
 </div>
 <div class="card">
  <div class="card-body">

   @include('partials.errors')

   <form action="{{ isset($tag) ? route('tags.update', $Tag->id) : route('tags.store') }}" method="POST">
    @csrf
    @if(isset($tag))
    @method('PUT')
    @endif
    <div class="form-group">
     <label for="name">Name</label>
     <input type="text" id="name" class="form-control" name="name" value="{{ isset($tag) ? $tag->name : '' }}">
    </div>
    <div class="form-group">
     <button class="btn btn-success mt-2">
      {{ isset($tag) ? 'Edit Tag' : 'Add Tag' }}
     </button>
    </div>
   </form>
  </div>
 </div>
</div>

@endsection