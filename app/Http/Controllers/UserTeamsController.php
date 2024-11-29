<?php

namespace App\Http\Controllers;

use App\Models\team;
use Illuminate\Http\Request;

class UserTeamsController extends Controller
{
    public function index() {
        $teams = team::where('creator_id', auth()->id())->get();
        return view('/userTeams', compact('teams'));
    }
}
