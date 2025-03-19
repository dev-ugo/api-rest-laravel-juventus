<?php

namespace Database\Seeders;

use App\Models\Player;
use Illuminate\Database\Seeder;

class PlayerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $players = [
            [
                'name' => 'Wojciech Szczęsny',
                'position' => 'Gardien',
                'nationality' => 'Polonais',
                'birth_date' => '1990-04-18',
                'matches_played' => 219,
                'goals_scored' => 0,
                'assists' => 0,
            ],
            [
                'name' => 'Federico Chiesa',
                'position' => 'Attaquant',
                'nationality' => 'Italien',
                'birth_date' => '1997-10-25',
                'matches_played' => 125,
                'goals_scored' => 27,
                'assists' => 21,
            ],
            [
                'name' => 'Dušan Vlahović',
                'position' => 'Attaquant',
                'nationality' => 'Serbe',
                'birth_date' => '2000-01-28',
                'matches_played' => 82,
                'goals_scored' => 28,
                'assists' => 7,
            ],
            [
                'name' => 'Adrien Rabiot',
                'position' => 'Milieu',
                'nationality' => 'Français',
                'birth_date' => '1995-04-03',
                'matches_played' => 177,
                'goals_scored' => 17,
                'assists' => 11,
            ],
            [
                'name' => 'Danilo',
                'position' => 'Défenseur',
                'nationality' => 'Brésilien',
                'birth_date' => '1991-07-15',
                'matches_played' => 156,
                'goals_scored' => 6,
                'assists' => 13,
            ],
        ];

        foreach ($players as $player) {
            Player::create($player);
        }
    }
}
