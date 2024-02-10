<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Storage;

class ShowController extends Controller
{
    public function index()
    {


        return view('blog');

    }



}
