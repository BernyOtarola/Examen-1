@extends('layouts.app')

@section('title', 'Editar Apuesta')

@section('content')
<div class="card">
    <div class="card-header">
        <h1>Editar Apuesta</h1>
    </div>
    <div class="card-body">
        <form action="{{ route('apuestas.update', $apuesta->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="id_juego">Juego:</label>
                <select name="id_juego" id="id_juego" class="form-control">
                    @foreach($juegos as $juego)
                    <option value="{{ $juego->id }}" {{ $juego->id == $apuesta->id_juego ? 'selected' : '' }}>{{ $juego->nombre }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="fecha">Fecha:</label>
                <input type="datetime-local" name="fecha" id="fecha" class="form-control" value="{{ $apuesta->fecha }}">
            </div>
            <div class="form-group">
                <label for="monto">Monto:</label>
                <input type="number" name="monto" id="monto" class="form-control" value="{{ $apuesta->monto }}">
            </div>
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
    </div>
</div>
@endsection
