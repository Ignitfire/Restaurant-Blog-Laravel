@extends('layouts/main')


@section('content')
<br>
<h2>Ajouter des images à la page de "{{$restaurant->title}}"</h2>


      <div>
        @if ($message=session('success'))
            <div class="alert alert-success">
              <strong>{{ $message }}</strong>
            </div>

            @foreach(session('images') as $image)
                <img src="{{URL::to('/') }}/images/galerie/{{ $image['name']}}" width="300px">
            @endforeach
        @endif

        <br>
        <form action="" method="POST" enctype="multipart/form-data" style="border: 1px solid black; padding: 10px">
            @csrf

            <div>
                <label class="form-label" for="inputImage">Sélectionner les images :</label>
                <input type="file" name="images[]" id="inputImage" multiple class="form-control @error('images') is-invalid @enderror">
                @error('images')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div>
                <button type="submit" class="btn btn-success" style="--bs-btn-color:#198754">Ajouter</button>
            </div>
            <div>
                <br>
                <button href="{{route('restaurants.show',['url'=>$restaurant->url])}}" class="btn btn-info">Retour à la page du restaurant</button>
            </div>
        </form>
      </div>
@endsection
