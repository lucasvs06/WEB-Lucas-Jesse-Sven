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

}
