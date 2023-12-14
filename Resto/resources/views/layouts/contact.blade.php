@extends('layouts/main')



@section('content')

<div class="callout primary">
    <div class="text-center">
      <h1>Contactez-nous</h1>
      <h2 class="subheader">Signalez nous un problème ou une amélioration possible</h2>
    </div>
  </div>

<h1>{{$title}}</h1>
 <form  method="POST">
    @csrf
 <div>
    <label>Nom</label>
    <input type="text" name="name" placeholder="Nom">
    <p style="color:red">{{$errors->first('name')}}</p>
</div>
 <div>
    <label>E-mail</label>
    <input type="text" name="email" placeholder="exemple@exemple.com">
    <p style="color:red">{{$errors->first('email')}}</p>
</div>
 <div>
    <label>Votre message</label>
    <textarea name="message" placeholder="Votre message"></textarea>  </div>
    <p style="color:red">{{$errors->first('message')}}</p>
 <div>
    <br><button type="submit" class="btn btn-success" style="--bs-btn-color:#198754">Envoyer</button></div>
 </form>
@endsection
