@extends('master')

@section('content')
    <div class="container mt-5">
        <h1>Detalls de la Tasca</h1>

        <div class="card">
            <div class="card-body">
                <table>
            <tr><h2>{{ $tasca->id }}</h2></tr>
                                    <tr><h2><strong>ID: </strong>{{ $tasca->nom }}</h2></tr>
                                    <tr><p><strong>Sulg: </strong>{{ $tasca->slug }}</p></tr>
                                    <tr><p><strong>Creat: </strong>{{ $tasca->created_at }}</p></tr>
                                    <tr><p><strong>Actualitzat: </strong>{{ $tasca->updated_at }}</p></tr>
                                    <tr><p><strong>Completada: </strong>{{ $tasca->completada ? 'Sí' : 'No' }}</p></tr>
                                    <tr><p><strong>Descripció: </strong>{{ $tasca->descripcio }}</p></tr>
                <tr><p><a href="{{ route('projecte.index') }}" class="btn btn-primary">Tornar a la Llista de Projectes</a></p></tr>
</table>
            </div>
        </div>
    </div>
@endsection
