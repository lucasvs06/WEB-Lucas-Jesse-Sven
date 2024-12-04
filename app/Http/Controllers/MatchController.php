<?php

namespace App\Http\Controllers;

use App\Models\Matches;
use Illuminate\Http\Request;

class MatchController extends Controller
{
    public function ShowMatches()
    {
        $matches = Matches::all();
        return view('/tournaments', ["matches" => $matches]);
    }
}
