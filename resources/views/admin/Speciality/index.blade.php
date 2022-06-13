@extends('layouts.app')

@section('content')

<div class="d-fles justify-content-end mb-2">
 <a href="{{ route('speciality.create') }}" class="btn btn-success float-right">Add Speciality</a>
</div>

<div class="card card-default">

 <div class="card-header">
  Services Provided
 </div>

 <div class="card-body">
  <table class="table">
   <thead>
    <th>
     Our Speciality
    </th>
    <th>
     Speciality One
    </th>
    <th>
     Speciality Two
    </th>
    <th>
     Speciality Three
    </th>
    <th></th>
    <th></th>
    <th></th>
   </thead>
   <tbody>
    @foreach($specialities as $speciality)
    <tr>

     <td>
      <h3>{{ $speciality->title }}</h3>
      <p>{!! $speciality->content !!}</p>
     </td>
     <td>
      <figure> <img src="{{ asset($speciality->imageone) }}" width="200" height="200" alt=""></figure>
      <h3>{{ $speciality->one }}</h3>
      <p>{!! $speciality->onedetails !!}</p>
     </td>
     <td>
      <figure><img src="{{ asset($speciality->imagetwo) }}" width="200" height="200" alt=""></figure>
      <h3>{{ $speciality->two }}</h3>
      <p>{!! $speciality->twodetails !!}</p>
     </td>
     <td>
      <figure><img src="{{ asset($speciality->imagethree) }}" width="200" height="200" alt=""></figure>
      <h3>{{ $speciality->three }}</h3>
      <p>{!! $speciality->threedetails !!}</p>
     </td>

    </tr>
    @endforeach
   </tbody>
  </table>


 </div>
</div>

@endsection