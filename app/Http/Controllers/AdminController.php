<?php

namespace App\Http\Controllers;

use App\Models\team;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function Teams(){
        $teams = team::all();
        return view('/admin/adminTeamDash', ["teams" => $teams]);
    }
}
