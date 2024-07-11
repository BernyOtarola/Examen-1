<?php

use Illuminate\Database\Seeder;
use App\Models\Juego;

class JuegosTableSeeder extends Seeder
{
    public function run()
    {
        Juego::create([
            'nombre' => 'Poker',
            'cantidad_jugadores' => 5,
            'juego_de_cartas' => true,
        ]);

        Juego::create([
            'nombre' => 'Blackjack',
            'cantidad_jugadores' => 3,
            'juego_de_cartas' => true,
        ]);

        Juego::create([
            'nombre' => 'Ruleta',
            'cantidad_jugadores' => 8,
            'juego_de_cartas' => false,
        ]);

        Juego::create([
            'nombre' => 'Craps',
            'cantidad_jugadores' => 6,
            'juego_de_cartas' => false,
        ]);
    }
}

