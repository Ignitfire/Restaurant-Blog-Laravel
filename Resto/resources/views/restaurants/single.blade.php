@extends('layouts/main')

@section('content')

<br>
<div id="Nom">
<h1 style="font-family:'Lucida Handwriting','Monotypa Corsiva',cursive;">{{$restaurant->title}}</h1>
<p style="font-size: 8pt">Propriétaire : {{$owner->name}}</p>
</div>

<div id="Infos" style="display: flex; flex-direction:row;">
@livewire('gallery',['restaurant'=>$restaurant,'images'=>$images,'height'=>300,'width'=>500])

<div style="width:fit-content">
    <h3 style="font-size: 14pt">Note:</h3>
    <i class="fa fa-star" style="color: gold">{{$avg}}</i>
    <br>
    <h3 style="font-size: 14pt">Tags:</h3>
    <p>{{$tags}}
    {{-- @foreach($tags as $tag)
    <span class="badge bg-secondary">{{$tag->name}}</span>
    @endforeach --}}
    <h2 style="font-size: 16pt">Description:</h2>
    <p>{{$content}}</p>
</div>
    <br>

</div>
<br>

<h2 style="font-size: 16pt">Commentaires:</h2>
<br>
<form method="GET" style="border: 1px solid black; padding:10px">
    <h3>Donnez nous votre avis!</h3>
    <br>
    @csrf
<div>
    <input type="hidden" name="restaurant_id" value="{{$restaurant->id}}">
    <label>Nom:</label>
    <input type="text" name="author_id" placeholder="Entrez votre nom">
    <label>Commentaire:</label>
    <input type="text" name="message" placeholder="Ecrivez-ici">
    <label>Note:</label>
    <livewire:star-rating :restaurant="$restaurant" :key="$restaurant->id" />
</div>
<br
<div><button type="submit" formmethod="POST" class="btn btn-success" style="--bs-btn-color:#198754">Envoyer</button></div>
</form>
<br>

<table>
    <tr>
        <th>Posté par</th>
        <th>Message</th>
        <th>Note</th>
    </tr>
    @foreach($comments as $comment)
    <tr>
        <td>{{$comment->author_id}}</td>
        <td>{{$comment->message}}</td>
        <td>
            @if($comment->rating===0) Aucune
            @else @for($i=0;$i<$comment->rating;$i++)<i class="fa fa-star" style="color: gold"></i>@endfor
            @endif
        </td>
    </tr>
    @endforeach
</table>
@endsection
