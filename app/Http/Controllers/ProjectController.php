<?php

namespace App\Http\Controllers;

use App\Models\Project;

class ProjectController extends Controller
{
    public function index()
    {
        // Ubah ::all() jadi ::paginate() agar $projects->links() tidak error
        $projects = Project::paginate(6); 

        return view('page.project', compact('projects'));
    }

    public function show($id)
    {
        $project = Project::findOrFail($id);

        return view('page.project-detail', compact('project'));
    }
}