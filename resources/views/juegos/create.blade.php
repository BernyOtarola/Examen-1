@extends('layouts.app')

@section('title', 'Crear Juego')

@section('content')
<div class="card">
    <div class="card-header">
        <h1>Crear Juego</h1>
    </div>
    <div class="card-body">
        <form action="{{ route('juegos.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" id="nombre" class="form-control">
            </div>
            <div class="form-group">
                <label for="cantidad_jugadores">Cantidad de Jugadores:</label>
                <input type="number" name="cantidad_jugadores" id="cantidad_jugadores" class="form-control">
            </div>
            <div class="form-group">
                <label for="juego_de_cartas">Juego de Cartas:</label>
                <select name="juego_de_cartas" id="juego_de_cartas" class="form-control">
                    <option value="1">Sí</option>
                    <option value="0">No</option>
                </select>
            </div>
            <button type="submit" class="btn btn-success">Crear</button>
        </form>
    </div>

</div>
@endsection