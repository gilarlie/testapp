<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HobbiesController extends Controller
{
    public function hobby() {
        $data = 'Watching Series, Playing Volleyball, Cooking';
        return view('Hobbies', ['hobby' => $data]);
    }
}
