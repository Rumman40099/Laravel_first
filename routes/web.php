<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShowController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Projectcontroller;
use App\Http\Controllers\Homepagecontroller;
use App\Http\Controllers\Experiencecontroller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get("/", [Homepagecontroller::class, 'index']);
Route::get("/projects",[Projectcontroller::class, 'index'] );
Route::post("/projects",[Projectcontroller::class,'registerpost'])->name('projects');

Route::get("/work_experience",[Experiencecontroller::class, 'index'] );
Route::get("/blog",[ShowController::class, 'index'] );



