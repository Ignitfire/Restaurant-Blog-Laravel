@extends('layouts/main')

@section('content')
<div class="callout primary">
    <div class="text-center">
      <h1>Bienvenue!</h1>
      <h2 class="subheader">Les meilleurs restaurants pour les meilleurs Gourmets</h2>
    </div>
  </div>

  <div>
    <h2>Restaurants</h2>
    <p>Voici notre selection des meilleurs restaurants du coin</p>
    <div>
    <div class="row small-up-2 medium-up-3 large-up-4">
        @for ($i = 0; $i < 3; $i++)
        <div class="column">
        <div class="card">
            <div class="card-section">
            <h4>{{ $restaurants[$i]->title }}</h4>
            <p>{{$restaurants[$i]->food_type}}</p>
            <a href={{route('restaurants.index') .'/'. $restaurants[$i]->url }} class="btn btn-info">Voir le restaurant</a>
            </div>
    </div>
    </div>
    @endfor
    <a href="{{route('restaurants.index')}}" class="btn btn-info">Voir plus</a>
    </div>
    <br>
@endsection
