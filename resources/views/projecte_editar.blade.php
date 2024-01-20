@extends('master')

@section('content')
    <div class="container mt-5">
        <h1>Editar Projecte</h1>

        <form action="{{ route('projecte.update', $projecte->id) }}" method="post">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="nom" class="form-label">Nom del Projecte</label>
                <input type="text" class="form-control" id="nom" name="nom" value="{{ $projecte->nom }}" required>
            </div>

            <div class="mb-3">
                <label for="slug" class="form-label">Slug</label>
                <input type="text" class="form-control" id="slug" name="slug" value="{{ $projecte->slug }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Guardar Canvis</button>
        </form>
    </div>
@endsection
