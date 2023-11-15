<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Experiencecontroller extends Controller
{
    public function index()
     {
        $exp = json_decode(file_get_contents(storage_path("data/experience.json")), true);

        return view('work_experience')->with('exp', $exp);
     }


}
