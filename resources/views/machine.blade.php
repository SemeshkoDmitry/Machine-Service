@extends('layouts.app')

@section('title', $machine['name'])

@section('content')
    <h1>{{ $machine['name'] }}</h1>
    <p><strong>Опис робіт:</strong> {{ $machine['text'] }}</p>

    <a href="/machines" class="btn btn-secondary mt-3">Назад до каталогу</a>
@endsection