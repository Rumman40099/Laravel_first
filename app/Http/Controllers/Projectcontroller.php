<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Projectcontroller extends Controller
{
    public function index()
     {
        $list = json_decode(file_get_contents(storage_path("data/projects.json")), true);

        return view('projects')->with('list', $list);

     }
}
