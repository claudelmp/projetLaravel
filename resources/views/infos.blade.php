@extends('template1')
@section('contenu')
<br>
<div class="container">
    <div class="row card text-white bg-dark">
        <h4 class="card-header">Contactez-moi</h4>
        <div class="card-body">
            <form action="{{ route('store.email') }}" method="POST">
                @csrf
                <div class="form-group">
                    <input type="text" class="form-control  @error('nom') is-invalid @enderror" name="nom" id="nom" placeholder="Votre nom" value="{{ old('nom') }}">
                    @error('nom')
                    <div class="invalid-feedback">{{ 'Le nom est obligatoire et doit faire plus de 2 caractères et moins de 20' }}</div>
                    @enderror
                </div>
<div class="form-group">
                    <input type="text" class="form-control  @error('email') is-invalid @enderror" name="email" id="email" placeholder="Votre email" value="{{ old('email') }}">
                    @error('email')
                    <div class="invalid-feedback">{{ "l'email doit avoir un format valide"}}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-secondary">Envoyer !</button>
            </form>
        </div>
    </div>
</div>
@endsection
