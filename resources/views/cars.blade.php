@extends('layout.default')

@section('content')

<h1 class="container">Cars list:</h1>

@foreach ($cars as $car)
<div class="row align-items-md-stretch position-relative">
  <div class="col-md-6 mt-4">
    <div class="h-100 p-5 bg-body-tertiary border rounded-3">
      <h2>Producer: {{$car->producer}}</h2>
      <p>Model: {{$car->title}}</p>
      <p>Number of doors: {{$car->number_of_doors}}</p>  
      <a href="/cars/{{$car->id}}" class="stretched-link"></a>
    </div>
  </div>
</div>
@endforeach

@endsection