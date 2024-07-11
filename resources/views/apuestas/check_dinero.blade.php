@extends('layouts.app')

@section('title', 'Check Dinero')

@section('content')
<div class="card">
    <div class="card-header">
        <h1>Check Dinero</h1>
    </div>
    <div class="card-body">
        <p>Total dinero de juegos de cartas: <strong>{{ $totalCartas }}</strong></p>
        <p>Total dinero de juegos no de cartas: <strong>{{ $totalNoCartas }}</strong></p>
    </div>
</div>
@endsection
