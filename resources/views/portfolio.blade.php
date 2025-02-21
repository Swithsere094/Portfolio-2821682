@extends('partials.layout')

@section('title', 'Portfolio')

@section('content')
    <h1>@lang('Portfolio')</h1>

    <ul>
        @forelse ($portfolio as $portfolioItem)
            <li> <a href="{{ route('portfolio.show', $portfolioItem) }}">{{ $portfolioItem->title }}</a> </li>
        @empty
            <li>No se encuentran elementos</li>
        @endforelse
        {{ $portfolio->links('pagination::bootstrap-4') }}
    </ul>
@endsection