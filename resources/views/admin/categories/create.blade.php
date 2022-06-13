@extends('layouts.app')

@section('content')

<div class="d-fles justify-content-end mb-2">
 <div class="card-header">
  {{ isset($category) ? 'Edit Category' : 'Create Category'}}
 </div>
 <div class="card">
  <div class="card-body">
   @include('partials.errors')

   <form action="{{ isset($category) ? route('categories.update', $category->id) : route('categories.store') }}"
    method="POST">
    @csrf
    @if(isset($category))
    @method('PUT')
    @endif
    <div class="form-group">
     <label for="name">Name</label>
     <input type="text" id="name" class="form-control" name="name"
      value="{{ isset($category) ? $category->name : '' }}">
    </div>
    <div class="form-group">
     <button class="btn btn-success mt-2">
      {{ isset($category) ? 'Edit Category' : 'Add Category' }}
     </button>
    </div>
   </form>
  </div>
 </div>
</div>

@endsection