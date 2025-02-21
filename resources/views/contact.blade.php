@extends('partials.layout')

@section('title', 'Contact')

@section('content')
    <h1>@lang('Contact')</h1>

    <form method="POST">
        @csrf
        <input type="text" name="name" placeholder="Nombre:" value="{{ old('name') }}"><br>
        {!! $errors->first('name', ':message <br>') !!}
        <input type="text" name="subject" placeholder="Asunto: " value="{{ old('subject') }}"><br>
        {!! $errors->first('subject', ':message <br>') !!}
        <input type="text" name="email" placeholder="Correo: " value="{{ old('email') }}"><br>
        {!! $errors->first('email', ':message <br>') !!}
        <textarea name="content" placeholder="Mensaje: ">{{ old('content') }}</textarea><br>
        {!! $errors->first('content', ':message <br>') !!}
        <button>Enviar</button>
    </form>
@endsection