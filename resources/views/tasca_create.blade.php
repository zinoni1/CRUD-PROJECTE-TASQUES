@extends('master')

@section('content')
    <div class="container mt-5">
        <h1>Crear Tasca</h1>

        <form action="{{ route('projecte.tascas.store', ['projecte' => $projecte]) }}" method="post">
            @csrf

            <div class="mb-3">
                <label for="nom" class="form-label">Nom de la Tasca</label>
                <input type="text" class="form-control" id="nom" name="nom" required>
            </div>

            <div class="mb-3">
                <label for="slug" class="form-label">Slug</label>
                <input type="text" class="form-control" id="slug" name="slug" required>
            </div>

            <div class="mb-3">
                <label for="completada" class="form-label">Completada</label>
                <input type="checkbox" class="form-check-input" id="completada" name="completada" value="1">
            </div>

            <div class="mb-3">
                <label for="descripcio" class="form-label">Descripció de la Tasca</label>
                <textarea class="form-control" id="descripcio" name="descripcio" required></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Crear Tasca</button>
        </form>
        <a href="{{ route('projecte.index') }}" class="btn btn-secondary mt-3">Tornar a la Llista de Tasques</a>
    </div>
@endsection
