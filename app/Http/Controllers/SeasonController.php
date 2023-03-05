<?php

namespace App\Http\Controllers;

use App\Models\Season;
use Illuminate\Http\Request;

class SeasonController extends Controller
{
    public function index(Request $request)
    {
        return Season::all();
    }

    public function show(Request $request, $uuid)
    {
        return Season::findOrFail($uuid);
    }

    public function store(Request $request)
    {
        $season = new Season;
        $season->year = $request->input('year');
        $season->team_uuid = $request->input('team_uuid');
        $season->games_played = $request->input('games_played');
        $season->goals = $request->input('goals');
        $season->assists = $request->input('assists');
        $season->points = $request->input('points');
        $season->save();
    }

    public function update(Request $request, $uuid)
    {
        $season = Season::findOrFail($uuid);
        $season->year = $request->input('year');
        $season->team_uuid = $request->input('team_uuid');
        $season->games_played = $request->input('games_played');
        $season->goals = $request->input('goals');
        $season->assists = $request->input('assists');
        $season->points = $request->input('points');
        $season->save();
    }

    public function destroy(Request $request, $uuid)
    {
        $season = Season::findOrFail($uuid);
        $season->delete();
    }
}
