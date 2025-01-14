<?php

namespace App\Http\Controllers;

use App\Models\team;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class TeamsController extends Controller
{
    public function Index(){
        $teams = team::all();
        return view('/teams', ["teams" => $teams]);
    }

    public function Create(){
        return(view('teams.create'));
    }

    public function Store(Request $request){
        $newteam = new team();
        $newteam->name = $request->name;
        $newteam->members = $request->members;
        $newteam->points = $request->points ?? 0;
        $newteam->creator_id = auth()->id();
        $newteam->save();

        return redirect()->route('user.teams');
    }

    public function edit(team $team) {
        return view('teams.edit')->with('team', $team);
    }

        public function update(Request $request, team $team) {
            $team->name = $request->name;
            $team->members = $request->members;
            $team->points = $request->points ?? 0;
            $team->creator_id = auth()->id();
            $team->save();

            return redirect()->route('user.teams');;
        }

        public function destroy(team $team){
            $team->delete();
            return redirect()->route('user.teams');
        }

}
