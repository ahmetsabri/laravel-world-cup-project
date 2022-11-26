<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateTeamRequest;
use App\Models\Group;
use App\Models\Team;
use Illuminate\Http\Request;

class WorldCupController extends Controller
{
    public function index()
    {
        $groups = Group::with(['teams'=> function($query){
            $query->orderBy('pts', 'desc')->orderByRaw('goals_for - goals_against desc');
        }])->orderBy('name')->get();
        return view('welcome', compact('groups'));
    }

    public function edit(Team $team)
    {
        return view('team', compact('team'));
    }

    public function update(UpdateTeamRequest $request,Team $team)
    {
        $requestData = $request->safe()->except('matches_played');
        $team->update($requestData);

        return 'updated';
    }
}
