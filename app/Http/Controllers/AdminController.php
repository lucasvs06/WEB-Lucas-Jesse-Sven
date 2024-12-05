<?php

namespace App\Http\Controllers;

use App\Models\Matches;
use App\Models\team;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    // Teams admin stuff!!
    public function Teams(){
        $teams = team::all();
        return view('/admin/adminTeamDash', ["teams" => $teams]);
    }

    // User Admin stuff!
    public function Users(){
        $users = User::all();
        return view('/admin/adminUserDash', ["users" => $users]);
    }

    public function Matches()
    {
        $matches = Matches::all();
        return view('/admin/adminTournamentsDash', ["matches" => $matches]);
    }

    public function edit(User $user) {
        return view('admin.users.edit')->with('user', $user);
    }

        public function update(Request $request, user $user) {
            $user->name = $request->name;
            $user->email = $request->email;
            $user->admin = $request->admin;
            $user->save();

            return redirect()->route('admin.users');;
        }

    public function destroy(User $user){
        $user->delete();
        return redirect()->route('admin.users');
    }

    public function CreateMatch(){
        $teams = team::all();
        $users = User::where('admin', 1)->get();

        return(view('admin.matches.create', ['teams' => $teams], ['users' => $users]));
    }
    public function StoreMatch(Request $request){
        $newmatch = new Matches();
        $newmatch->team1_id = $request->team1_id ?? 0;
        $newmatch->team2_id = $request->team2_id ?? 0;
        $newmatch->team1_score = $request->team1_score ?? 0;
        $newmatch->team2_score = $request->team2_score ?? 0;
        $newmatch->field = $request->field;
        $newmatch->referee_id = $request->referee_id ?? 0;
        $newmatch->time = $request->time;
        $newmatch->save();

        return redirect()->route('tournaments.dash');
    }

    public function DestroyMatch(Matches $match){
        $match->delete();
        return redirect()->route('tournaments.dash');
    }



}
