<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SkillsController extends Controller
{
    public function index(){
        
        $skills = array(
            "skill_one" => "Knowledgeable in programming language: CSS, HTML, Java, and Python.",
            "skill_two" => "Basic knowledge in version management tools: Git and GitHub.",
            "skill_three" => "Knowledgeable with multimedia software: Filmora, LumaFusion, Procreate, Figma, and Canva.",
            "skill_four" => "Flexible individual and team player who funcitons well in a fast-paced work environment."
        );

        return view('skills', $skills);
    }
}
