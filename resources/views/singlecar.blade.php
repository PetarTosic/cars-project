@extends('layout.default')

@section('content')

<div class="p-5 mb-4 bg-body-tertiary rounded-3">
  <div class="container-fluid py-5">
    <h1 class="display-5 fw-bold">Producer: {{$car->producer}}</h1>
    <p class="col-md-8 fs-4">Model: {{$car->title}}</p>
    <p class="col-md-8 fs-4">Number of doors: {{$car->number_of_doors}}</p>
  </div>
</div>

@endsection