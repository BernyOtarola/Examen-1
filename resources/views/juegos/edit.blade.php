@extends('layouts.app')

@section('title', 'Editar Juego')

@section('content')
<div class="card">
    <div class="card-header">
        <h1>Editar Juego</h1>
    </div>
    <div class="card-body">
        <form action="{{ route('juegos.update', $juego->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" id="nombre" class="form-control" value="{{ $juego->nombre }}">
            </div>
            <div class="form-group">
                <label for="cantidad_jugadores">Cantidad de Jugadores:</label>
                <input type="number" name="cantidad_jugadores" id="cantidad_jugadores" class="form-control" value="{{ $juego->cantidad_jugadores }}">
            </div>
            <div class="form-group">
                <label for="juego_de_cartas">Juego de Cartas:</label>
                <select name="juego_de_cartas" id="juego_de_cartas" class="form-control">
                    <option value="1" {{ $juego->juego_de_cartas ? 'selected' : '' }}>Sí</option>
                    <option value="0" {{ !$juego->juego_de_cartas ? 'selected' : '' }}>No</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
    </div>
</div>
@endsection
