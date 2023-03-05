<?php

namespace App\Http\Controllers;

use App\Models\Set;
use Illuminate\Http\Request;

class SetController extends Controller
{
    public function index(Request $request)
    {
        return Set::all();
    }

    public function show(Request $request, $uuid)
    {
        return Set::findOrFail($uuid);
    }

    public function store(Request $request)
    {
        $set = new Set;
        $set->name = $request->input('name');
        $set->year = $request->input('year');
        $set->save();
    }

    public function update(Request $request, $uuid)
    {
        $set = Set::findOrFail($uuid);
        $set->name = $request->input('name');
        $set->year = $request->input('year');
        $set->save();
    }

    public function destroy(Request $request, $uuid)
    {
        $set = Set::findOrFail($uuid);
        $set->delete();
    }
}
