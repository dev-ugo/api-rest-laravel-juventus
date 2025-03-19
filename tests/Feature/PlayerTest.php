<?php

namespace Tests\Feature;

use App\Models\Player;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PlayerTest extends TestCase
{
    use RefreshDatabase;

    public function test_can_get_all_players(): void
    {
        // Arrange
        $players = Player::factory(3)->create();

        // Act
        $response = $this->getJson('/api/players');

        // Assert
        $response
            ->assertStatus(200)
            ->assertJsonCount(3)
            ->assertJsonStructure([
                '*' => [
                    'id',
                    'name',
                    'position',
                    'nationality',
                    'birth_date',
                    'matches_played',
                    'goals_scored',
                    'assists'
                ]
            ]);
    }

    public function test_can_get_single_player(): void
    {
        // Arrange
        $player = Player::factory()->create();

        // Act
        $response = $this->getJson("/api/players/{$player->id}");

        // Assert
        $response
            ->assertStatus(200)
            ->assertJson([
                'id' => $player->id,
                'name' => $player->name,
                'position' => $player->position,
                'nationality' => $player->nationality,
                'matches_played' => $player->matches_played,
                'goals_scored' => $player->goals_scored,
                'assists' => $player->assists,
            ]);
    }

    public function test_returns_404_for_non_existent_player(): void
    {
        // Act
        $response = $this->getJson('/api/players/999');

        // Assert
        $response->assertStatus(404);
    }
}
