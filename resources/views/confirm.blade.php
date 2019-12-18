@extends('template1')
@section('contenu')
<br>
<div class="container">
    <div class="row card text-white bg-dark">
        <div class="card-body">
            <p class="card-text">Merci monsieur {{$request['nom']}} {{$request['email']}}</p>
        </div>
    </div>
</div>
@endsection