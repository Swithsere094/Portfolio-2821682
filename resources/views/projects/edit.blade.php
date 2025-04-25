@extends('partials.layout')

@section('title', 'Actualizar Proyecto')

@section('content')
    <h1>Actualizar Proyecto</h1>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form method="POST" action="{{ route('projects.update', $project) }}">
        @csrf @method('PATCH')
        <label>Nombre:</label><br>
        <input type="text" name="title" placeholder="Nombre: " value="{{ old('title', $project->title) }}"><br>
        <label>Url:</label><br>
        <input type="text" name="url" placeholder="Url: " value="{{ old('url', $project->url) }}"><br>
        <label>Descripcion</label><br>
        <textarea name="description" placeholder="Description">{{ old('description', $project->description) }}</textarea><br>
        <button>Guardar</button>
    </form>
@endsection