<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;


class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
   public function index()
{
    $projects = Project::all(); // ambil semua project dari database
    return view('admin.projects.index', compact('projects'));
}


    /**
     * Show the form for creating a new resource.
     */
    public function create()
{
    return view('admin.projects.create');
}


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'required|string',
        'tech_stack' => 'required|string',
        'link' => 'nullable|url',
        'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
    ]);

    $imagePath = null;

    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('projects', 'public');
    }

    Project::create([
        'title' => $request->title,
        'description' => $request->description,
        'tech_stack' => $request->tech_stack,
        'link' => $request->link,
        'image' => $imagePath,
    ]);

    return redirect()->route('projects.index')->with('success', 'Project berhasil ditambahkan!');
}



    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
{
    $project = Project::findOrFail($id);
    return view('admin.projects.edit', compact('project'));
}


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
{
    $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'required|string',
        'tech_stack' => 'required|string',
        'link' => 'nullable|url',
    ]);

    $project = Project::findOrFail($id);
    $project->update($request->all());

    return redirect()->route('projects.index')->with('success', 'Project berhasil diupdate!');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
{
    $project = Project::findOrFail($id);
    $project->delete();

    return redirect()->route('projects.index')->with('success', 'Project berhasil dihapus!');
}

}
