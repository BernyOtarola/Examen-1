<!-- resources/views/ruleta/resultado.blade.php -->
@extends('layouts.app')

@section('title', 'Resultado de la Ruleta')

@section('content')
    <div class="card">
        <div class="card-header">
            <h1>Resultado de la Ruleta</h1>
        </div>
        <div class="card-body">
            <p>Número ganador: {{ $ruleta->numero_ganador }}</p>
            <a href="{{ route('ruleta.girar') }}" class="btn btn-primary">Girar otra vez</a>
        </div>
    </div>
@endsection
