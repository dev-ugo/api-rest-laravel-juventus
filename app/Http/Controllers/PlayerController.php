<?php

namespace App\Http\Controllers;

use App\Models\Player;
use Illuminate\Http\JsonResponse;


class PlayerController extends Controller
{
    public function index(): JsonResponse
    {
        $players = Player::all();
        return response()->json($players);
    }

    public function show(Player $player): JsonResponse
    {
        return response()->json($player);
    }
}
