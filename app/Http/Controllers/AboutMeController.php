<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutMeController extends Controller
{
    public function index() {
        $data = array (
            'name' => "Arlie Gil",
            'surname' => "Damian",
            'bday' => "April 09, 2003",
            'age' => "20 years old"
        );
        return view('About-Me', ['data' => $data]);
    }
}
