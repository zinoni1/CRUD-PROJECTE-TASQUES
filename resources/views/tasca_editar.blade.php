@extends('master')

@section('content')
    <div class="container mt-5">
        <h1>Editar Tasca</h1>

        <form action="{{ route('projecte.tascas.update', ['projecte' => $projecte , 'tasca' => $tasca]) }}" method="post">

            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="nom">Nom de la Tasca:</label>
                <input type="text" class="form-control" id="nom" name="nom" value="{{ $tasca->nom }}" required>
            </div>

            <div class="form-group">
                <label for="slug">Slug:</label>
                <input type="text" class="form-control" id="slug" name="slug" value="{{ $tasca->slug }}" required>
            </div>

            <div class="form-group">
                <label for="completada">Completada:</label>
                <select class="form-control" id="completada" name="completada" required>
                    <option value="1" {{ $tasca->completada ? 'selected' : '' }}>Sí</option>
                    <option value="0" {{ !$tasca->completada ? 'selected' : '' }}>No</option>
                </select>
            </div>

            <div class="form-group">
                <label for="descripcio">Descripció:</label>
                <textarea class="form-control" id="descripcio" name="descripcio" rows="3" required>{{ $tasca->descripcio }}</textarea>
            </div>

            <button type="submit" class="btn btn-primary mt-3">Guardar Canvis</button>
        </form>

        <a href="{{ route('projecte.index') }}" class="btn btn-secondary mt-3">Tornar a la Llista de Tasques</a>
    </div>
@endsection
