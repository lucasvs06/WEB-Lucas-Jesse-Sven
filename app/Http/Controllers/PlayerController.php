<?php

namespace App\Http\Controllers;

use App\Models\Player;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
    public function Index(){
        $players = Player::all();
        return view('/players', ["players" => $players]);
    }

    public function Create(){
        return(view('players.create'));
    }

    public function Store(Request $request){


        $newplayer = new player();
        $newplayer->name = $request->name;
        $newplayer->age = $request->age;
        $newplayer->weight = $request->weight;
        $newplayer->nationality = $request->nationality;
        $newplayer->creator_id = auth()->id();
        $newplayer->save();

        return redirect()->route('user.teams');
    }

}
