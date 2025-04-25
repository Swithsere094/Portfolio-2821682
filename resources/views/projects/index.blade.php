@extends('partials.layout')

@section('title', 'Portfolio')

@section('content')
    <h1>@lang('Portfolio')</h1>

    @auth
    <a href="{{ route('projects.create') }}">Crear Proyecto</a>
    @endauth

    <ul>
        @forelse ($projects as $project)
            <li> <a href="{{ route('projects.show', $project) }}">{{ $project->title }}</a> </li>
        @empty
            <li>No se encuentran elementos</li>
        @endforelse
        {{ $projects->links('pagination::bootstrap-4') }}
    </ul>
@endsection