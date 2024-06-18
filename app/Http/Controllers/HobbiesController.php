<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HobbiesController extends Controller
{
    public function index(){

        $hobbies = array(
            "hobby_one" => "Watching Korean Drama Series, Korean Variety Shows, and Western Series.",
            "hobby_two" => "Listening to music."
        );

        return view('hobbies', $hobbies);
    }
}
