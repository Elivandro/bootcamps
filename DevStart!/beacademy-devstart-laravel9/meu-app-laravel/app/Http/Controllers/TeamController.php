<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function show($id)
    {

        $team = Team::find($id);
        $team->load('users');

        return $team;

    }
}
