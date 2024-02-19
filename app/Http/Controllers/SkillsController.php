<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SkillsController extends Controller
{
    public function skill() {
        $data = 'can play the Guitar, Good listener, Leadership';
        return view('Skills', ['skills' => $data]);
    }
}
