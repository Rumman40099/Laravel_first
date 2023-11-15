<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class Homepagecontroller extends Controller
{
    public function index()
     {
        $data = json_decode(file_get_contents(storage_path("data/home.json")), true);

        return view('home')->with('data', $data);
     }
}
