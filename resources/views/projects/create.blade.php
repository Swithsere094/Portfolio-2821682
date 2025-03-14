@extends('partials.layout')

@section('title', 'Nuevo Proyecto')

@section('content')
    <h1>Nuevo Proyecto</h1>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form method="POST" action="{{ route('projects.store') }}">
        @csrf
        <label>Nombre:</label><br>
        <input type="text" name="title" placeholder="Nombre: "><br>
        <label>Url:</label><br>
        <input type="text" name="url" placeholder="Url: "><br>
        <label>Descripcion</label><br>
        <textarea name="description" placeholder="Description"></textarea><br>
        <button>Guardar</button>
    </form>
@endsection