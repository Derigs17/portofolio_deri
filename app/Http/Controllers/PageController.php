<?php

namespace App\Http\Controllers;
use App\Models\Project;

class PageController extends Controller
{
    public function home()
{
    $projects = Project::latest()->get(); // ambil semua project, terbaru duluan
    return view('home', compact('projects'));
}

    public function about() {
        return view('about');
    }

    public function projects() {
        return view('projects');
    }

    public function contact() {
        return view('contact');
    }
}
