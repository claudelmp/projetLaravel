    @extends('template_form')
    @section('content')
        <div class="card">
            <header class="card-header">
                <p class="card-header-title">Nom de la formation : {{ $formation->nomformation }}</p>
            </header>
            <div class="card-content">
                <div class="content">
                    <p>Date de début : {{ $formation->datedebut }}</p>
                    <hr>
                    <p>{{ $formation->duree }} {{ $formation->unite }} </p>
                     <p>Catégorie : {{ $categorie }}</p>
                </div>
            </div>
            <footer class="card-footer is-centered">
            <a class="button is-info" href="{{ route('formation.index') }}">Retour à la liste</a>
        </footer>
        </div>
    @endsection