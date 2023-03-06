<?php

namespace App\Http\Controllers;

use App\Models\Player;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
    public function index(Request $request)
    {
        return Player::with(['set', 'season', 'season.team'])->get();
    }

    public function show(Request $request, $uuid)
    {
        return Player::findOrFail($uuid);
    }

    public function store(Request $request)
    {
        $player = new Player;
        $player->name = $request->input('name');
        $player->position = $request->input('position');
        $player->age = $request->input('age');
        $player->birthdate = $request->input('birthdate');
        $player->year_drafted = $request->input('year_drafted');
        $player->round = $request->input('round');
        $player->pick = $request->input('pick');
        $player->set_uuid = $request->input('set_uuid');
        $player->save();
    }

    public function update(Request $request, $uuid)
    {
        $player = Player::findOrFail($uuid);
        $player->name = $request->input('name');
        $player->save();
    }

    public function destroy(Request $request, $uuid)
    {
        $player = Player::findOrFail($uuid);
        $player->delete();
    }
}
