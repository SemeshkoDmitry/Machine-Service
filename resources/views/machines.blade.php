@extends('layouts.app')

@section('title', 'Каталог обладнання')

@section('content')
    <h1>Каталог обладнання</h1>

    @foreach($machines as $m)
        <x-card title="{{ $m['name'] }}" text="{{ $m['service'] }}">
            <a href="/machines/{{ $m['id'] }}" class="btn btn-primary btn-sm mt-2">Детальніше</a>
        </x-card>
    @endforeach
@endsection