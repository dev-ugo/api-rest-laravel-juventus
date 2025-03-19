<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Player extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'position',
        'nationality',
        'birth_date',
        'matches_played',
        'goals_scored',
        'assists'
    ];

    protected $casts = [
        'birth_date' => 'date',
        'matches_played' => 'integer',
        'goals_scored' => 'integer',
        'assists' => 'integer'
    ];
}
