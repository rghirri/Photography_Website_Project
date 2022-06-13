@extends('layouts.app')

@section('content')

<div class="d-fles justify-content-end mb-2">
 <a href="{{ route('services.create') }}" class="btn btn-success float-right">Add Services</a>
</div>

<div class="card card-default">

 <div class="card-header">
  Services Provided
 </div>

 <div class="card-body">
  <table class="table">
   <thead>
    <th>
     Our Service
    </th>
    <th>
     Service One
    </th>
    <th>
     Service Two
    </th>
    <th>
     Service Three
    </th>
    <th></th>
    <th></th>
   </thead>
   <tbody>
    @foreach($services as $service)
    <tr>

     <td>
      <h3>{{ $service->title }}</h3>
      <p>{!! $service->content !!}</p>
     </td>
     <td>
      <h3>{{ $service->one }}</h3>
      <p>{!! $service->onedetails !!}</p>
     </td>
     <td>
      <h3>{{ $service->two }}</h3>
      <p>{!! $service->twodetails !!}</p>
     </td>
     <td>
      <h3>{{ $service->three }}</h3>
      <p>{!! $service->threedetails !!}</p>
     </td>

    </tr>
    @endforeach
   </tbody>
  </table>


 </div>
</div>



@endsection