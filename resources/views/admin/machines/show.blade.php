@extends('adminlte::page')

@section('title', 'Деталі верстата')

@section('content_header')
    <h1>Деталі верстата</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <p><strong>ID:</strong> {{ $machine->id }}</p>
            <p><strong>Назва:</strong> {{ $machine->name }}</p>
            <p><strong>Послуга:</strong> {{ $machine->service }}</p>
            <p><strong>Опис:</strong> {{ $machine->description }}</p>

            <a href="{{ route('admin.machines.index') }}" class="btn btn-secondary">
                Назад
            </a>
        </div>
    </div>
@stop