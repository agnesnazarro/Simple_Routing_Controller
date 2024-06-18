<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutMeController extends Controller
{
    public function index(){
        
        $about = array(
            "firstName" => "Agnes",
            "lastName" => "Nazarro",
            "age" => "22",
            "email" => "afn3861@students.uc-bcf.edu.ph"
        );

        return view ('aboutme', $about);
    }
}
