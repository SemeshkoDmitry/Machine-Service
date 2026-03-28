@extends('adminlte::page')

@section('title', 'Додати елемент')

@section('content_header')
    <h1>Додати новий верстат</h1>
@stop

@section('content')
    <form action="{{ route('admin.machines.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">Назва</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}">
            @error('name')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="service" class="form-label">Послуга</label>
            <input type="text" name="service" id="service" class="form-control" value="{{ old('service') }}">
            @error('service')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Опис</label>
            <textarea name="description" id="description" class="form-control">{{ old('description') }}</textarea>
            @error('description')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Зберегти</button>
        <a href="{{ route('admin.machines.index') }}" class="btn btn-secondary">Назад</a>
    </form>
@stop