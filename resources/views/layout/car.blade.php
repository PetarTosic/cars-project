<div class="row align-items-md-stretch">
  <div class="col-md-6 mt-4">
    <div class="h-100 p-5 bg-body-tertiary border rounded-3">
      <h2>Producer: {{$car->producer}}</h2>
      <p>Model: {{$car->title}}</p>
      <p>Number of doors: {{$car->number_of_doors}}</p>  
      <a href="/cars/{{$car->id}}">Show more</a>
    </div>
  </div>
</div>