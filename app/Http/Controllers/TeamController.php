<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index(Request $request)
    {
        return Team::all();
    }

    public function show(Request $request, $uuid)
    {
        return Team::findOrFail($uuid);
    }

    public function store(Request $request)
    {
        $team = new Team;
        $team->team_name = $request->input('team_name');
        $team->save();
    }

    public function update(Request $request, $uuid)
    {
        $team = Team::findOrFail($uuid);
        $team->team_name = $request->input('team_name');
        $team->save();
    }

    public function destroy(Request $request, $uuid)
    {
        $team = Team::findOrFail($uuid);
        $team->delete();
    }
}
