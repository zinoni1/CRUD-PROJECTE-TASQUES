@extends('master')

@section('content')
    <div class="container mt-5">
        <h1>Crear Projecte</h1>

        <form action="{{ route('projecte.index') }}" method="post">
            @csrf

            <div class="mb-3">
                <label for="nom" class="form-label">Nom del Projecte</label>
                <input type="text" class="form-control" id="nom" name="nom" required>
            </div>

            <div class="mb-3">
                <label for="slug" class="form-label">Slug</label>
                <input type="text" class="form-control" id="slug" name="slug" required>
            </div>

            <button type="submit" class="btn btn-primary">Crear Projecte</button>

        </form>
        <a href="{{ route('projecte.index') }}" class="btn btn-secondary mt-3">Tornar a la Llista de Tasques</a>
    </div>
@endsection
