@extends('layouts/main')


@section('content')
<style>
    .restoStats{
display: flex;
flex-direction: column;
width: 15vw;
}

</style>


<div class="callout primary ">
    <div class="text-center">
      <h1>Nos Restaurants</h1>
      <h2 class="subheader">Notre selection des meilleurs restaurants du coin</h2>
    </div>
  </div>

    <div class="row small-up-2 medium-up-3 large-up-4">
        @foreach ($restaurants as $restaurant)
        <div class="column">
        <div class="card" style="flex-direction:initial">
            <div class="card-section" style="width:500px">
            <h4>{{ $restaurant->title }}</h4>
            <p>{{$restaurant->food_type}}</p>
            <a href={{route('restaurants.index') .'/'. $restaurant->url }} class="btn btn-info">Voir le restaurant</a>
            </div>
            <div class="card-divider restoStats">
            <div>Tags: {{$restaurant->tags}} </div>
            <br>
            <div>Note:<i class="fa fa-star" style="color: gold">{{$restaurant->rating}}</i></div>
            </div>
            <div>
            @livewire('gallery',['restaurant'=>$restaurant,'height'=>100,'width'=>200])
        </div>
        </div>
        </div>
        @endforeach
    </div>

    {{ $restaurants->links()}}

@endsection
