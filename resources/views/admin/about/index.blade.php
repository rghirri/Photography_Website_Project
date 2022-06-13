@extends('layouts.app')

@section('content')

<div class="d-fles justify-content-end mb-2">
 <a href="{{ route('aboutadmin.create') }}" class="btn btn-success float-right">Add About</a>
</div>

<div class="card card-default">

 <div class="card-header">
  About Page
 </div>

 <div class="card-body">
  <table class="table">
   <thead>
    <th>
     Our Working place
    </th>
    <th>
     Why Choose
    </th>
    <th>
     Our Histroy
    </th>
    <th>
     Our Contact
    </th>
    <th></th>
    <th></th>
    <th></th>
   </thead>
   <tbody>
    @foreach($abouts as $about)
    <tr>
     <td>
      <figure> <img src="{{ asset($about->imagework) }}" width="200" height="200" alt=""></figure>
      <h3>{{ $about->title }}</h3>
      <p>{!! $about->content !!}</p>
     </td>

     <td>
      <h3>{{ $about->titlechoose }}</h3>
      <p>{!! $about->choosedetails !!}</p>
     </td>

     <td>
      <h3>{{ $about->titlehistory }}</h3>
      <p>{!! $about->historydetails !!}</p>
     </td>

     <td>
      <h3>{{ $about->titlecontact }}</h3>
      <p>{!! $about->contactdetails !!}</p>
     </td>

    </tr>
    @endforeach
   </tbody>
  </table>


 </div>
</div>

@endsection