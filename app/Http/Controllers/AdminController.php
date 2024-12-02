<?php

namespace App\Http\Controllers;

use App\Models\team;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function Teams(){
        $teams = team::all();
        return view('/admin/adminTeamDash', ["teams" => $teams]);
    }

    public function Users(){
        $users = User::all();
        return view('/admin/adminUserDash', ["users" => $users]);
    }
}
