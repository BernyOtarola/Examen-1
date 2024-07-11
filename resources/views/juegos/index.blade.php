@extends('layouts.app')

@section('title', 'Lista de Juegos')

@section('content')
<div class="card">
    <div class="card-header">
        <h1>Lista de Juegos</h1>
        <a href="{{ route('juegos.create') }}" class="btn btn-primary">Nuevo Juego</a>
    </div>
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Cantidad de Jugadores</th>
                    <th>Juego de Cartas</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($juegos as $juego)
                <tr>
                    <td>{{ $juego->id }}</td>
                    <td>{{ $juego->nombre }}</td>
                    <td>{{ $juego->cantidad_jugadores }}</td>
                    <td>{{ $juego->juego_de_cartas ? 'Sí' : 'No' }}</td>
                    <td>
                        <a href="{{ route('juegos.edit', $juego->id) }}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{ route('juegos.destroy', $juego->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
