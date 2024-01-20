@extends('master')

@section('content')
    <div class="container mt-5">
        <h1>Detalls del Projecte</h1>

        <div class="card">
            <div class="card-body">
                <h2>ID: {{ $projecte->id }}</h2>
                <h2>Nom: {{ $projecte->nom }}</h2>
                <p>{{ $projecte->created_at }}</p>
                <p>{{ $projecte->updated_at }}</p>
                <p>Slug: {{ $projecte->slug }}</p>
                <a href="{{ route('projecte.index') }}" class="btn btn-primary">Tornar a la Llista de Projectes</a>
            </div>
        </div>
    </div>
@endsection
