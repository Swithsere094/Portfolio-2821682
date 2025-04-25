@extends('partials.layout')

@section('title', 'Portfolio')

@section('content')
    <h1>@lang('Portfolio')</h1>

    <h2>Titulo: {{ $project->title }}</h2>
    <p><b>Descripción:</b> {{ $project->description }}</p>
    <p><b>Fecha creación:</b> {{ $project->created_at->diffForHumans() }}</p>

    @auth
    <a href="{{ route('projects.edit', $project) }}">Editar</a>

    <form method="POST" action="{{ route('projects.destroy', $project) }}">
        @csrf @method("DELETE")
        <button>Eliminar</button>
    </form>
    @endauth
@endsection