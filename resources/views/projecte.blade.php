@extends('master')

@section('content')
    <div class="container mt-5">
        <h1 class="mb-4">Projectes y Tasques</h1>
        <a href="{{ route('projecte.create') }}" class="btn btn-primary mb-3">Crear Projecte</a>

        @foreach($projectes as $projecte)
            <div class="card mb-4">
                <div class="card-header">

                    <strong><h1>{{ $projecte->nom }}</h1></strong>
                    <hr>
                    <p><strong>ID:</strong> {{ $projecte->id }}</p>
                    <p><strong>Creat:</strong> {{ $projecte->created_at }}</p>
                    <p><strong>Actualitzat:</strong> {{ $projecte->updated_at }}</p>
                    <p><strong>Slug:</strong> {{ $projecte->slug }}</p>
                    <a href="{{ route('projecte.tascas.create', $projecte->id) }}" class="btn btn-primary">Crear Tasca</a>
                    <a href="{{ route('projecte.show', ['projecte' => $projecte->id]) }}" class="btn btn-warning ml-2">Detalls</a>
                    <form action="{{ route('projecte.destroy', $projecte->id) }}" method="post" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('¿Eliminar proyecto?')">Eliminar Projecte</button>
                    </form>
                    <a href="{{ route('projecte.edit', $projecte->id) }}" class="btn btn-success">Editar Projecte</a>
                </div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nom</th>
                                <th>Slug</th>
                                <th>Creat</th>
                                <th>Actualitzat</th>
                                <th>Completada</th>
                                <th>Descripció</th>
                                <th>Accions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($projecte->tasca as $tasca)
                                <tr>
                                    <td>{{ $tasca->id }}</td>
                                    <td>{{ $tasca->nom }}</td>
                                    <td>{{ $tasca->slug }}</td>
                                    <td>{{ $tasca->created_at }}</td>
                                    <td>{{ $tasca->updated_at }}</td>
                                    <td>{{ $tasca->completada ? 'Sí' : 'No' }}</td>
                                    <td>{{ $tasca->descripcio }}</td>
                                    <td>
                                        <a href="{{ route('projecte.tascas.edit', ['projecte' => $projecte, 'tasca' => $tasca]) }}" class="btn btn-primary mb-2">Editar</a>
                                        <form action="{{ route('projecte.tascas.destroy', ['projecte' => $projecte, 'tasca' => $tasca]) }}" method="post" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger mb-2" onclick="return confirm('¿Eliminar tarea?')">Eliminar</button>
                                        </form>
                                        <a href="{{ route('projecte.tascas.show', ['projecte' => $projecte->id, 'tasca' => $tasca]) }}" class="btn btn-warning">Detalls</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        @endforeach
    </div>
@endsection
