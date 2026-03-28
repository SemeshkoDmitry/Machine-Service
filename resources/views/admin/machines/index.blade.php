@extends('adminlte::page')

@section('title', 'Список верстатів')

@section('content_header')
    <h1>Список верстатів</h1>
@stop

@section('content')
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Назва</th>
                <th>Послуга</th>
                <th>Дії</th>
            </tr>
        </thead>
        <tbody>
            @foreach($machines as $machine)
                <tr>
                    <td>{{ $machine->id }}</td>
                    <td>{{ $machine->name }}</td>
                    <td>{{ $machine->service }}</td>
                    <td>
                        <a href="{{ route('admin.machines.show', $machine) }}" class="btn btn-info btn-sm">
                            Перегляд
                        </a>

                        <form action="{{ route('admin.machines.destroy', $machine) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">
                                Видалити
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@stop