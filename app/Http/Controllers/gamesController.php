<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class gamesController extends Controller
{
    public function index(){
        return view(game.games);
    }
}