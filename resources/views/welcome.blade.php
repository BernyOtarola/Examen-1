<!-- resources/views/welcome.blade.php -->
@extends('layouts.app')

@section('title', 'Inicio')

@section('content')
    <div class="jumbotron">
        <h1>Bienvenido a De Chiripa SA</h1>
        <p class="lead">Sistema de control de apuestas para casino online</p>
        <hr class="my-4">
        <p>¡Comienza a gestionar tus apuestas y juegos de manera eficiente!</p>
        <a class="btn btn-primary btn-lg" href="{{ route('apuestas.index') }}" role="button">Ver Apuestas</a>
    </div>
@endsection
