@extends('template_form')
@section('css')
<style>
    .card-footer {
        justify-content: center;
        align-items: center;
        padding: 0.4em;
    }
    select, .is-info {
        margin: 0.3em;
    }
</style>
@endsection
@section('content')
@if(session()->has('info'))
<div class="notification is-success">
    {{ session('info') }}
</div>
@endif

<div class="card">
    <header class="card-header">
        <p class="card-header-title">Formations</p>
        <div class="select">
            <select onchange="window.location.href = this.value">
                <option value="{{ route('formation.index') }}" @unless($slug) selected @endunless>Toutes catégories</option>
                @foreach($categories as $categorie)
                <option value="{{ route('formation.categorie', $categorie->slug) }}" {{ $slug == $categorie->slug ? 'selected' : '' }}>{{ $categorie->nom }}</option>
                @endforeach
            </select>
        </div>
        <a class="button is-info" href="{{ route('formation.create') }}">Créer une formation</a>
    </header>
    <div class="card-content">
        <div class="content">

            <table class="table is-hoverable">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nom de la formation</th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($formations as $formation)
                    <tr>
                        <td>{{ $formation->id }}</td>
                        <td><strong>{{ $formation->nomformation }}</strong></td>
                        <td><a class="button is-primary" href="{{ route('formation.show', $formation->id) }}">Voir</a></td>
                        <td><a class="button is-warning" href="{{ route('formation.edit', $formation->id) }}">Modifier</a></td>
                        <td>
                            <form action="{{ route('formation.destroy', $formation->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="button is-danger" type="submit">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <footer class="card-footer">
        {{ $formations->links() }}
    </footer>
</div>
@endsection